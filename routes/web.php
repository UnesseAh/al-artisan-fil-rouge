<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
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
    Route::post('edit-profile/{id}', function (){
        return 1;
    })->name('edit.profile');
});

Route::controller(ResetPasswordController::class)->group(function() {
    Route::get('forget-password', 'showForgetPasswordForm')->name('forget.password.show');
    Route::post('forget-password', 'sendRestLinkEmail')->name('forget.password.submit');
    Route::get('reset-password/{token}', 'showResetPasswordForm')->name('reset.password.show');
    Route::post('reset-password', 'resetPassword')->name('reset.password.submit');
});

Route::controller(ProductController::class)->group(function() {
    Route::get('dashboard/create-product', 'create')->name('create.product');
    Route::get('dashboard/edit-product', 'edit')->name('edit.product');
});

Route::get('shopping-cart', function () {
    return view('cart');
});

Route::controller(ProductController::class)->group(function () {
    Route::get('products', 'create')->name('create.product');
    Route::post('product', 'store')->name('store.product');
    Route::get('product/{id}', 'edit')->name('edit.product');
    Route::put('product/{id}',  'update')->name('update.product');
    Route::delete('product/{product}', 'destroy')->name('delete.product');
});

Route::controller(CategoryController::class)->group(function (){
    Route::get('categories', 'index')->name('create.category');
    Route::post('categories', 'store')->name('store.category');
    Route::delete('categories/{id}', 'destroy')->name('delete.category');
    Route::get('categories/{id}', 'edit')->name('edit.category');
    Route::put('categories/{id}', 'update')->name('update.category');
});

Route::controller(SubcategoryController::class)->group(function () {
    Route::post('subcategories', 'store')->name('store.subcategory');
    Route::get('subcategories/{id}', 'edit')->name('edit.subcategory');
    Route::put('subcategories/{id}',  'update')->name('update.subcategory');
    Route::delete('subcategories/{subcategory}', 'destroy')->name('delete.subcategory');
});



Route::get('show-product/{product}', [ProductController::class, 'show'])->name('show.product');

Route::post('product/add-to-cart/', [CartController::class, 'addProductToCart'])->name('cart.add');
Route::get('show-cart', [CartController::class, 'showMyCart'])->name('cart.show');
Route::delete('delete-cart-item/{cartItem}', [CartController::class, 'deleteCartItem'])->name('cart.delete');

Route::get('checkout/{subtotal}', [PaymentController::class, 'checkout'])->name('payment.page');

Route::post('checkout/buy-products', [PaymentController::class, 'buyProducts'])->name('buy.products');

