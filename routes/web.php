<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgotPasswordController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});


Route::controller(AuthController::class)->group(function()
{
    Route::get('register', 'showRegisterPage');
    Route::get('login', 'showLoginPage');
    Route::post('post-register', 'register')->name('register');
    Route::post('post-login', 'login')->name('login');

    Route::get('dashboard', 'dashboard');
    Route::get('logout','logout')->name('logout');
});

Route::controller(ForgotPasswordController::class)->group(function(){
    Route::get('forget-password', 'showForgetPasswordForm')->name('showForgetForm');
    Route::post('forget-password', 'submitForgetPasswordForm')->name('submitForgetForm');
});

