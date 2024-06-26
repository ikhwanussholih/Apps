<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index()
    {
        return view('login.login');
    }

    function login(Request $request)
    {
        $request->validate
        ([
            'email'=>'required',
            'password'=>'required',
        ],
        [
            'email.required'=>'email wajib diisi',
            'password.required'=>'password wajib diisi',
        ]);
        
        $infoLogin = 
        [
            'email'=>$request->email,
            'password'=>$request->password,
        ];
        if(Auth::attempt($infoLogin))
        {
            echo "Sukses";exit();
        } else 
        {
            return redirect('')->withErrors('Username dan Password Salah')->withInput();
        }
    }
}
