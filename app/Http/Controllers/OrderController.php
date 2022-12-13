<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Customer;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() 
    {
        return view('order.index', ['orders' => Order::all()]);
    }

    public function create() 
    {
      return view('order.create', ['customers' => Customer::all()]);
    }
    
    public function store(Request $request)
    {
        Order::create($request->all());
        return redirect()->route('order');
    }
    
    public function edit(Request $request, $id)
    {
      $order = Order::find($id);
      $customerId = $order->customer->id;
      return view('order.edit', ['order' => $order, 'customers' => Customer::all(), 'customerId' => $customerId]);
    }

    public function update(Request $request, $id)
    {
        Order::find($id)
        ->update($request->all());
        return redirect()->route('order');
    }

    public function delete ($id)
    {
      $order = Order::find($id);
      $order->delete();
      return redirect()->route('order');
    }
}
