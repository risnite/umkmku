<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Customer;
use Illuminate\Http\Request;

class OrderController extends Controller
{
  public function index()
  {
    return view('order.index', ['orders' => Order::all()->sortByDesc('created_at')]);
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

  public function edit($id)
  {
    $order = Order::find($id);
    $customerId = $order->customer->id;
    return view('order.edit', ['order' => $order, 'customers' => Customer::all(), 'customerId' => $customerId]);
  }

  public function update(Request $request, $id)
  {
    if ($request->terkirim) {
      Order::find($id)->update(['terkirim' => $request->terkirim]);
      return redirect()->route('order');
    }
    if ($request->lunas) {
      Order::find($id)->update(['lunas' => $request->lunas]);
      return redirect()->route('order');
    }
    Order::find($id)
      ->update(['customer_id' => $request->customer_id, 'produk' => array_values($request->produk)]);
    return redirect()->route('order');
  }

  public function destroy($id)
  {
    $order = Order::find($id);
    $order->delete();
    return redirect()->route('order');
  }
}
