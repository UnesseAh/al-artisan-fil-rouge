<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // go to the login page
    public function index()
    {
        return view('auth.login');
    }

    // go to register page
    public function register(){
        return view('auth.register');
    }

}
