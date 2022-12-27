<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Customer;
use Illuminate\Http\Request;

class OrderApiController extends Controller
{
    public function index()
    {
        $orders = Order::with('customer')->orderBy('created_at', 'asc')->get();
        return response()->json(['message' => 'Success', 'data' => $orders, 'customers' => Customer::all()]);
    }

    public function store(Request $request)
    {
        $order = Order::create([
            'customer_id' => json_decode($request->customer_id),
            'produk' => json_decode($request->produk),
            'catatan' => $request->catatan,
        ]);
        return response()->json(['message' => 'Success', 'data' => $order]);
    }

    public function edit($id)
    {
        $order = Order::find($id);
        return response()->json(['message' => 'Success', 'data' => $order]);
    }

    public function update(Request $request, $id)
    {
        if ($request->missing('produk')) {
            if ($request->terkirim) {
                $order = Order::find($id)
                    ->update(['terkirim' => json_decode($request->terkirim)]);
                return response()->json(['message' => 'Success', 'data' => $order]);
            }
            if ($request->lunas) {
                $order = Order::find($id)
                    ->update(['lunas' => json_decode($request->lunas)]);
                return response()->json(['message' => 'Success', 'data' => $order]);
            }
        }
        $order = Order::find($id)
            ->update([
                'customer_id' => json_decode($request->customer_id),
                'produk' => json_decode($request->produk),
                'catatan' => $request->catatan,
                'terkirim' => json_decode($request->terkirim),
                'lunas' => json_decode($request->lunas),
            ]);
        return response()->json(['message' => 'Success', 'data' => $order]);
    }

    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();
        return response()->json(['message' => 'Success', 'data' => null]);
    }
}
