<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\OrderState;
use App\Models\User;
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
            'name' => 'required|string',
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

        $nameExist = User::all()->where('name', '=' , $request->input('name'));

        if ($nameExist->isEmpty()) {
            return redirect()->route('show.orders')->with('deleted', 'No user is registered with this name!');
        }

        $order->update([
            'user_id' => $nameExist[0]->id,
            'subtotal' => $request->input('subtotal'),
            'shipping_address' => $request->input('shipping_address'),
            'payment_method' => $request->input('payment_method'),
            'state_id' => $request->input('state_id'),
        ]);

        return redirect()->route('show.orders')->with('updated', 'Order updated successfully!');

    }


    public function deleteOrder(Order $order)
    {
        $order->delete();
        return redirect()->route('show.orders')->with('deleted', 'Order deleted successfully!');
    }
}
