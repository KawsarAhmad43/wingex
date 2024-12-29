<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function userDefaultlist(){

        $roles = Role::with('users')->get();
        return view('admin.pages.user.list', compact('roles'));
    }
}
