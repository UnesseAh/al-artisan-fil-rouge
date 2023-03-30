<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
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

    public function register(RegisterRequest $request)
    {
        return $request;
        $userCerdentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
    }
}
