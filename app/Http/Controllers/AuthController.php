<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function showRegisterPage(){
        return view('auth.register');
    }

    public function showLoginPage()
    {
        return view('auth.login');
    }

    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|min:3|regex:/^[^0-9]*$/',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed'
        ],[
            'name.regex'=> 'The :attribute field must not contain any numeric characters.',
        ]);

        if ($validator->fails()){
            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        }

        // Retrieve the validated input
        $validated = $validator->validated();

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        return redirect('login')->with('message', 'You have successfully registered');

    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string'
        ]);


        $userInput = $request->only('email', 'password');

        if(Auth::attempt($userInput))
        {
            return redirect()->intended('dashboard')->with('message', 'You have Successfully logged in');
        }

        return redirect('login')->with('success', 'Opps! You have entered invalid credentials');
//        return back()->withErrors([
//            'email' => 'The provided credentials do not match our records.'
//        ])->onlyInput('email');
    }

    public function dashboard()
    {
        if(Auth::check())
        {
            $products  = Product::all();
            return view('dashboard', ['products' => $products]);
        }
        return redirect('login')->with('success', 'Opps! You do not have access');
    }

    public function logout()
    {
        // Session::flush()
        Auth::logout();
        return redirect('login');
    }
}
