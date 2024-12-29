<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();
        $user->fill($request->validated());
        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = 'profile/'.uniqid().'.'.$image->getClientOriginalExtension();

            // Delete the existing image if it exists
            if ($user->image && Storage::exists($user->image)) {
                Storage::delete($user->image);
            }

            // Store the new image
            $image->storeAs('profile', basename($imagePath), 'public');
            $user->image = $imagePath;
        }

        // Clear email verification if the email was changed
        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        // Save user
        $user->save();

        return redirect()->route('admin.settings.profile')->with('status', 'Profile updated successfully!');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
