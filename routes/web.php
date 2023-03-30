<?php

use App\Http\Controllers\AuthController;
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
    Route::get('register', 'showRegisterPage')->name('register');
    Route::post('post-register', 'register')->name('register.post');
    Route::get('login', 'showLoginPage')->name('login');
    Route::post('post-login', 'login')->name('login.post');

//    Route::get('dashboard', 'dashboard');
//    Route::get('logout','logout')->name('logout');
});

