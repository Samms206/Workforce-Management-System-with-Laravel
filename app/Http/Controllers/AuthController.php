<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view("Login\login");
    }

    public function auth(Request $request)
    {
        //validasi
        $credentials = $request->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);
        //login dengan employee
        if(Auth::guard('employee')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        //login dengan users
        if(Auth::guard('web')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        Session::flash('status','failed');
        Session::flash('message','login wrong!');
        return redirect('/login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
