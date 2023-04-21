<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Handicraft;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    public function addProductToCart(Request $request)
    {
        if(Auth::user())
        {
            $userId = Auth::user()->id;
            $handicraftId = $request->input('handicraft_id');
            $quantity = $request->input('quantity');

            $product = Handicraft::find($handicraftId);
            $total = $product->price * $quantity;

            Cart::create([
                'handicraft_id' => $handicraftId,
                'quantity' => $quantity,
                'user_id' => $userId,
                'total' => $total,
            ]);

            return Redirect::back()->with('message', 'product added successfully!');

        }else return 'you are not logged in';

    }

    public function showMyCart()
    {
        if(Auth::check())
        {
            $userId  = Auth::user()->id;
            $cartItems = Cart::where('user_id', '=', $userId)
                ->with('handicraft')
                ->get();
            return view('cart', ['cartItems' => $cartItems]);
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
