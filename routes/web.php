<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\HandicraftController;
use App\Http\Controllers\ProfileController;
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


Route::controller(AuthController::class)->group(function() {
    Route::get('register', 'showRegisterPage')->name('register.page');
    Route::get('login', 'showLoginPage')->name('login.page');

    Route::post('post-register', 'register')->name('register.submit');
    Route::post('post-login', 'login')->name('login.submit');
    Route::get('logout','logout')->name('logout');

    Route::get('dashboard', 'dashboard')->name('dashboard');
});

Route::controller(ProfileController::class)->group(function (){
    Route::get('profile', 'RedirectToProfilePage')->name('profile.page');
    Route::put('update-profile/{user}', 'updateProfile')->name('update.profile');
    Route::put('update-password', 'updatePassword')->name('update.password');
});

Route::controller(ResetPasswordController::class)->group(function() {
    Route::get('forget-password', 'showForgetPasswordForm')->name('forget.password.show');
    Route::post('forget-password', 'sendRestLinkEmail')->name('forget.password.submit');
    Route::get('reset-password/{token}', 'showResetPasswordForm')->name('reset.password.show');
    Route::post('reset-password', 'resetPassword')->name('reset.password.submit');
});

Route::controller(HandicraftController::class)->group(function() {
    Route::get('handicraft', 'create')->name('create.product');
    Route::post('handicraft', 'store')->name('store.product');
    Route::get('handicraft/{handicraft}', 'edit')->name('edit.product');
    Route::put('handicraft/{handicraft}',  'update')->name('update.product');
    Route::delete('handicraft/{handicraft}', 'destroy')->name('delete.product');
});

Route::get('shopping-cart', function () {
    return view('cart');
});


Route::controller(CategoryController::class)->group(function (){
    Route::get('categories-subcategories', 'create')->name('create.category');
    Route::post('categories', 'store')->name('store.category');
    Route::get('category/{category}', 'edit')->name('edit.category');
    Route::put('category/{category}', 'update')->name('update.category');
    Route::delete('categories/{category}', 'destroy')->name('delete.category');
});


Route::controller(SubcategoryController::class)->group(function () {
    Route::post('subcategory', 'store')->name('store.subcategory');
    Route::get('subcategory/{subcategory}', 'edit')->name('edit.subcategory');
    Route::put('subcategory/{subcategory}',  'update')->name('update.subcategory');
    Route::delete('subcategory/{subcategory}', 'destroy')->name('delete.subcategory');
});


Route::get('show-product/{handicraft}', [HandicraftController::class, 'show'])->name('show.product');

Route::post('product/add-to-cart/', [CartController::class, 'addProductToCart'])->name('cart.add');
Route::get('show-cart', [CartController::class, 'showMyCart'])->name('cart.show');
Route::delete('delete-cart-item/{cartItem}', [CartController::class, 'deleteCartItem'])->name('cart.delete');

Route::get('checkout/{subtotal}', [PaymentController::class, 'checkout'])->name('payment.page');

Route::post('checkout/buy-products', [PaymentController::class, 'buyProducts'])->name('buy.products');

