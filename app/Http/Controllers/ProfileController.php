<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function RedirectToProfilePage(){
        $user = Auth::user();

        return view('profile', compact('user'));
    }

    public function updateProfile(User $user, Request $request){

        $validator =  Validator::make($request->all(), [
            'name' => 'required|string|max:255|min:3|regex:/^[^0-9]*$/',
            'email' => ['required','string','email','max:255', Rule::unique('users')->ignore(Auth::user()->id)],
        ]);

        if($validator->fails())
        {
            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        }
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'updated_at' => now()
        ]);

        return Redirect::back()->with('profile', 'Profile Updated successfully!');
    }
}
