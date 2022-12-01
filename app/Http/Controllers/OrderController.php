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
        $order = new Order;
        $order->customer_id = $request->customer_id;
        $order->produk = $request->produk;
        $order->catatan = $request->catatan;
        $order->save();
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
        $order = Order::find($id);
        if ($request->has('terkirim')) {
          $order->terkirim = $request->terkirim;
        }
        if ($request->has('lunas')) {
          $order->lunas = $request->lunas;
        }
        if ($request->has('customer_id')) {
        $order->customer_id = $request->customer_id;
        }
        if ($request->has('produk')) {
        $order->produk = $request->produk;
        }
        if ($request->has('catatan')) {
        $order->catatan = $request->catatan;
        }
        $order->save();
        return redirect()->route('order');
    }

    public function delete ($id)
    {
      $order = Order::find($id);
      $order->delete();
      return redirect()->route('order');
    }
}
