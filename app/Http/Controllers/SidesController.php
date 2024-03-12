<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SidesController extends Controller
{
    function index()
    {
        return view('Login');
    }
    function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email is required',
            'password.required' => 'Password is required bro'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            if (Auth::user()->role == 'pembaca') {
                return redirect('admin/pembaca');
            } elseif (Auth::user()->role == 'penulis') {
                return redirect('admin/penulis');
            } elseif (Auth::user()->role == 'admin') {
                return redirect('/admin');
            }
        } else {
            return redirect('')->withErrors('Email or password is incorrect Kesalahan antara 2 itu')->withInput();
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
