<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ResetPasswordController extends Controller
{
    public function showForgetPasswordForm()
    {
        return view('auth.forgetPassword');
    }

    public function sendRestLinkEmail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users',
        ],[
            'email.exists'=> 'No user is registered with this email address',
        ]);

        if($validator->fails()){
            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        }


        $email = $request->email;

        $existingReset = DB::table('password_resets')
            ->where('email', $email)
            ->first();


        if($existingReset)
        {
            return Redirect::back()->with('resetLink', 'We already sent you a password reset link! Please, check your email.');
        }else {
            $token = Str::random(64);

            DB::table('password_resets')->insert([
                'email' => $request->email,
                'token' => $token,
                'created_at' => Carbon::now()
            ]);

            Mail::send('email.forgetPassword', ['token' => $token], function($message) use($request)
            {
                $message->to($request->email);
                $message->subject('AL ARTISAN | Password Reset Request');
            });

            return redirect()->route('forget.password.show')->with('message', 'We have e-mailed you a password reset link!');
        }

    }

    public function showResetPasswordForm($token)
    {
        return view('auth.resetPassword', ['token' => $token]);
    }

    public function resetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required',
        ],
        [
            'email.exists' => 'No user is registered with this email address',
        ]);

        if($validator->fails()){
            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        }

        $foundToken = DB::table('password_resets')->where([
            'email' => $request->email,
            'token' => $request->token,
        ])->first();

        if(!$foundToken)
        {
            return back()->withInput()->with('tokenNotValid', 'The token is not valid!');
        }

        $user = User::where(['email' => $request->email])
            ->update(['password' => Hash::make($request->password)]);

        DB::table('password_resets')->where(['email' => $request->email])->delete();

        return redirect('/login')->with('message' , 'Your password has been reset successfully!');
    }


}
