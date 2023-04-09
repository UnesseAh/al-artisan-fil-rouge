<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\SubcategoryController;
use Illuminate\Support\Facades\Route;
use \Barryvdh\Debugbar\Facades\Debugbar;
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

Route::get('/', [LandingPageController::class, 'RedirectToLandingPageWithProductsAndCategories'])->name('landing.data');


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

Route::controller(ProductController::class)->group(function()
{
    Route::get('dashboard/create-product', 'create')->name('create.product');
    Route::get('dashboard/edit-product', 'edit')->name('edit.product');

});

Route::get('shopping-cart', function (){
    return view('cart');
});

Route::get('categories', [CategoryController::class, 'index'])->name('create.category');
Route::post('categories', [CategoryController::class, 'store'])->name('store.category');
Route::delete('categories/{id}', [CategoryController::class, 'destroy'])->name('delete.category');
Route::get('categories/{id}', [CategoryController::class, 'edit'])->name('edit.category');
Route::put('categories/{id}', [CategoryController::class, 'update'])->name('update.category');

//Route::get('categories', [SubcategoryController::class, 'index'])->name('create.subcategory');
Route::post('subcategories', [SubcategoryController::class, 'store'])->name('store.subcategory');
Route::get('subcategories/{id}', [SubcategoryController::class, 'edit'])->name('edit.subcategory');
Route::put('subcategories/{id}', [SubcategoryController::class, 'update'])->name('update.subcategory');
Route::delete('subcategories/{subcategory}', [SubcategoryController::class, 'destroy'])->name('delete.subcategory');

Route::get('products', [ProductController::class, 'create'])->name('create.product');
Route::post('products', [ProductController::class, 'store'])->name('store.product');
Route::get('product/{id}', [ProductController::class, 'edit'])->name('edit.product');
Route::put('product/{id}', [ProductController::class, 'update'])->name('update.product');
Route::delete('product/{product}', [ProductController::class, 'destroy'])->name('delete.product');
