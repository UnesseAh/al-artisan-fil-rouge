<?php

namespace App\Http\Controllers;

use App\Models\Handicraft;
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
            'password' => 'required|string|min:6|max:200|confirmed'
        ],[
            'name.regex'=> 'The :attribute field must not contain any numeric characters.',
        ]);

        if ($validator->fails()){
            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        }

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
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6|max:200'
        ]);

        if ($validator->fails()){
            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        }


        if(Auth::attempt($validator->validate()))
        {
            $request->session()->regenerate();

            return redirect()->intended('dashboard')->with('message', 'Welcome Back!');
        }

        return redirect('login')->with('invalidCredentials', 'Opps! You have entered invalid credentials');

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'You have successfully logged out');
    }

    public function dashboard()
    {
        if(Auth::check())
        {
            $handicrafts  = Handicraft::all();

            return view('dashboard', ['handicrafts' => $handicrafts]);
        }
        return redirect('login')->with('error', 'Opps! You do not have access');
    }

}
