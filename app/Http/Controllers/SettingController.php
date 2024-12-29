<?php

namespace App\Http\Controllers;

class SettingController extends Controller
{
    public function index()
    {
        return view('admin.pages.setting.index');
    }

    public function inner()
    {
        return view('admin.pages.user.manage.index');
    }

    public function profile()
    {
        $user = auth()->user();

        return view('admin.pages.setting.profile.update', compact('user'));
    }

    public function info()
    {
        return view('admin.pages.setting.profile.user-info');
    }
}
