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

    public function viewCart(){
        return view('cart');
    }
    public function addProductToCart(Request $request)
    {
        $handicraftId = $request->input('handicraft_id');
        $quantity = $request->input('quantity');

        $product = Handicraft::find($handicraftId);
        $total = $product->price * $quantity;

        if(Auth::user())
        {
            $cartHandicraft = Cart::where('handicraft_id', $handicraftId)->where('user_id', Auth::user()->id)->first();

            if($cartHandicraft){
                $cartHandicraft->quantity += $quantity;
                $cartHandicraft->total += $total;
                $cartHandicraft->save();

                return Redirect::back()->with('updated', 'Quantity updated successfully!');

            }else {
                $userId = Auth::user()->id;

                Cart::create([
                    'handicraft_id' => $handicraftId,
                    'quantity' => $quantity,
                    'user_id' => $userId,
                    'total' => $total,
                ]);

                return Redirect::back()->with('added', 'Product added successfully to cart!');
            }

        }else {
            return Redirect::back()->with('warning', 'You must be logged in first!');
        }
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
