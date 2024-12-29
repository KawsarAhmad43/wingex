<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    if (Auth::check()) {
        // Check if the user is an Admin or Moderator and redirect accordingly
        if (Auth::user()->hasRole('Admin') || Auth::user()->hasRole('Moderator')) {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('user.dashboard');
    }

    return view('home');
})->name('home');

Route::prefix('admin')->name('admin.')->middleware(['role:Admin'])->group(function () {

    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    Route::prefix('settings')->name('settings.')->group(function () {
        Route::get('/', [SettingController::class, 'index'])->name('index');
        Route::get('/inner', [SettingController::class, 'inner'])->name('inner');
        Route::get('/profile-update', [SettingController::class, 'profile'])->name('profile');
        Route::put('/profile-update', [ProfileController::class, 'update'])->name('profile.update');

        Route::get('/info-update', [SettingController::class, 'info'])->name('info');
    });

});
Route::get('/user/dashboard', [UserController::class, 'index'])->name('user.dashboard')->middleware('auth');

require __DIR__.'/auth.php';
