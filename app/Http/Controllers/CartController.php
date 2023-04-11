<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    public function addProductToCart(Request $request)
    {
        $userId = Auth::user()->id;
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');

        $product = Product::find($productId);

        Cart::create($request->all() + ['user_id' => $userId]);
        return Redirect::back()->with('message', 'product added successfully!');


    }
}
