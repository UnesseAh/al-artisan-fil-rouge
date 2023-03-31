<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed'
        ]);
        // skip id whenever validation fails
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ]);

        if($user) {
            return redirect('login')->with('success', 'You have successfully registered');
        }else {
            return redirect('register')->with('error', 'Registration failed. Please try again.');
        }
//        different method to create a new user
//        $user = new User;
//        $user->name = $request->name;
//        $user->email = $request->email;
//        $user->password = Hash::make($request->password);
//        $user->save();

    }

    public function login(Request $request)
    {
        $userInput = $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string'
        ]);

        if(Auth::attempt($userInput))
        {
            return redirect()->intended('dashboard')->with('success', 'You have Successfully loggedin');
        }

        return redirect('login')->with('success', 'Oppes! You have entered invalid credentials');
//        return back()->withErrors([
//            'email' => 'The provided credentials do not match our records.'
//        ])->onlyInput('email');
    }

    public function dashboard()
    {
        if(Auth::check())
        {
            return view('dashboard');
        }
        return redirect('login')->with('success', 'Opps! You do not have access');
    }
}
