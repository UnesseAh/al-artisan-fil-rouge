<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginPage()
    {
        return view('auth.login');
    }

    public function showRegisterPage(){
        return view('auth.register');
    }

    public function register(Request $request)
    {
        return $request->has('name');
        $userCerdentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
    }
}
