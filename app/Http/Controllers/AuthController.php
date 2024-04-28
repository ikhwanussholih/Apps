<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login.login');
    }

    public function admin()
    {
        return view('admin.admin');
    }
}
