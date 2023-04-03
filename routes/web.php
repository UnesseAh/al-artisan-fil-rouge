<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ResetPasswordController;
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
    Route::get('register', 'showRegisterPage')->name('register.page');
    Route::get('login', 'showLoginPage')->name('login.page');
    Route::post('post-register', 'register')->name('register.submit');
    Route::post('post-login', 'login')->name('login.submit');

    Route::get('dashboard', 'dashboard')->name('dashboard');
    Route::get('logout','logout')->name('logout');
});

Route::controller(ResetPasswordController::class)->group(function(){
    Route::get('forget-password', 'showForgetPasswordForm')->name('forget.password.show');
    Route::post('forget-password', 'sendRestLinkEmail')->name('forget.password.submit');
    Route::get('reset-password/{token}', 'showResetPasswordForm')->name('reset.password.show');
    Route::post('reset-password', 'resetPassword')->name('reset.password.submit');
});

