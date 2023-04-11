<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    public function addProductToCart(Request $request)
    {
        if(Auth::user()){
            $userId = Auth::user()->id;
            $productId = $request->input('product_id');
            $quantity = $request->input('quantity');

            $product = Product::find($productId);

            Cart::create($request->all() + ['user_id' => $userId]);
            return Redirect::back()->with('message', 'product added successfully!');
        }else return 'you are not logged in';

    }

    public function showMyCart()
    {
        if(Auth::check())
        {
            $userId  = Auth::user()->id;
            $cartItems = Cart::where('user_id', '=', $userId)
                ->with('product')
                ->get();
            return view('cart', compact('cartItems'));
        }else {
            return 'you are not logged in';
        }

    }

    public function deleteCartItem(Cart $cartItem)
    {
        $cartItem->delete();
        return Redirect::back();
    }
}
