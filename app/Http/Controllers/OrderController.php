<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\OrderState;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function getAllOrders()
    {
        $orders = Order::with('user')->get();
        return view('dashboard/order/orders', compact('orders'));
    }

    public function store(StoreOrderRequest $request)
    {
        //
    }

    public function editOrder(Order $order)
    {
        $states = OrderState::all();
        return view('dashboard/order/edit-order', ['order' => $order, 'states' => $states]);
    }


    public function updateOrder(Request $request, Order $order)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|numeric',
            'subtotal' => 'required|numeric|min:0',
            'shipping_address' => 'required|string',
            'payment_method' => 'required|string',
            'state_id' => 'required|numeric',
            ]
        );

        if($validator->fails()){
            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        }

        $order->update($request->all());

        return redirect()->route('show.orders')->with('updated', 'Order updated successfully!');
    }


    public function deleteOrder(Order $order)
    {
        $order->delete();
        return redirect()->route('show.orders')->with('deleted', 'Order deleted successfully!');
    }
}
