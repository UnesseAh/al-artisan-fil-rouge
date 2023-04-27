<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function RedirectToProfilePage(){
        if(Auth::user()){
            $user = Auth::user();

            return view('profile', compact('user'));
        }else abort(404);

    }

    public function updateProfile(Request $request){

        $validator =  Validator::make($request->all(), [
            'name' => 'required|string|max:255|min:3|regex:/^[^0-9]*$/',
            'email' => ['required','string','email','max:255', Rule::unique('users')->ignore(Auth::user()->id)],
        ],[
            'name.regex'=> 'The :attribute field must not contain any numeric characters.',
        ]);

        if($validator->fails())
        {
            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        }

        Auth::user()->update([
            'name' => $request->name,
            'email' => $request->email,
            'updated_at' => now()
        ]);

        return Redirect::back()->with('success', 'Profile Updated successfully!');
    }

    public function updatePassword(Request $request){

        $validator = Validator::make($request->all(), [
            'old_password' => 'required|string|min:6|max:200',
            'password' => 'required|string|min:6|max:200|confirmed'
        ]);

        if($validator->fails()){
            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        }

        if(Hash::check($request->old_password, Auth::user()->password)) {

            User::whereId(Auth::user()->id)->update([
                'password' => Hash::make($request->password)
            ]);

            return Redirect::back()->with('status', 'Password changed successfully!');

        }else return Redirect::back()->with("error-message", "Old Password Doesn't match!");

    }
}
