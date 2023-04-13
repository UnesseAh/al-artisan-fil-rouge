<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            ->get();
//        return $cartItems[0]->product_id;

//        $subtotal = Cart::where('user_id', '=', $userId)
//            ->sum($cartItems[0]->product->price * $cartItems[0]->quantity)
//            ->get();

        $order = Order::create([
            'user_id' => $userId,
            'subtotal' => 1111,
            'shipping_address' => $address,
            'payment_method' => $payment_method,
            'status_id' => 1
        ]);

        $orderId = $order->id;
        return $orderId;
        $i = 0;
        foreach ($cartItems as $cartItem)
        {
            OrderItem::create([
                'order_id' => $orderId,
                'product_id' => $cartItem[$i]->product_id,
                'quantity' => $cartItem[$i]->quantity,
                'price' => $cartItem[$i]->product->price,
            ]);
            $i++;
        }
        return 'Order created successfully! Eyaaaaaaaaay!!!!!!';
    }
}
