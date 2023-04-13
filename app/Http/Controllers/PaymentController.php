<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function checkout($subtotal)
    {
        return view('payment', compact('subtotal'));
    }

    public function buyProducts(Request $request)
    {
        $userId = Auth::user()->id;
        $address = $request->input('shipping_address');
        $payment_method = 'Credit Card';
        $cartItems = Cart::where('user_id', '=', $userId)
            ->with('product')
            ->get()
            ->toArray();

//        $cartItems =  DB::table('carts')->where('user_id', "=" , $userId)->get();

        $subtotal = Cart::where('user_id', '=', $userId)
                        ->sum('total');

//        $order = Order::create([
//            'user_id' => $userId,
//            'subtotal' => $subtotal,
//            'shipping_address' => $address,
//            'payment_method' => $payment_method,
//            'status_id' => 1
//        ]);

//        $orderId = $order->id;
        $orderId = 2;

        for($i = 0; $i < count($cartItems); $i++)
        {
            OrderItem::create([
                'order_id' => $orderId,
                'product_id' => $cartItems[0]['product_id'],
                'quantity' => $cartItems[$i]['quantity'],
                'price' => $cartItems[$i]['product']['price'],
            ]);
        }
        return 'Order created successfully! Eyaaaaaaaaay!!!!!!';
    }
}
