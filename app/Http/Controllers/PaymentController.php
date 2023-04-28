<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

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
        $phoneNumber = $request->input('phonenumber');

        $cartItems = Cart::where('user_id', $userId)
            ->with('handicraft')
            ->get()
            ->toArray();

        $subtotal = Cart::where('user_id', '=', $userId)
                        ->sum('total');

        $order = Order::create([
            'user_id' => $userId,
            'subtotal' => $subtotal,
            'shipping_address' => $address,
            'phone_number' => $phoneNumber,
            'state_id' => 1
        ]);

        $orderId = $order->id;

        for($i = 0; $i < count($cartItems); $i++)
        {
            OrderItem::create([
                'order_id' => $orderId,
                'handicraft_id' => $cartItems[$i]['handicraft_id'],
                'quantity' => $cartItems[$i]['quantity'],
                'price' => $cartItems[$i]['handicraft']['price'],
            ]);
        }

        Cart::where('user_id', $userId)->delete();

        return redirect()->route('cart.show')->with('success', 'You purchase went successfully!');

    }
}
