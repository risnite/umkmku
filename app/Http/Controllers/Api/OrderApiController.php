<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderApiController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return response()->json(['message' => 'Success', 'data' => $orders]);
    }

    public function store(Request $request)
    {
        $order = Order::create($request->all());
        return response()->json(['message' => 'Success', 'data' => $order]);
    }

    public function edit($id)
    {
        $order = Order::find($id);
        return response()->json(['message' => 'Success', 'data' => $order]);
    }

    public function update(Request $request, $id)
    {
        $order = Order::find($id)
            ->update($request->all());
        return response()->json(['message' => 'Success', 'data' => $order]);
    }

    public function delete($id)
    {
        $order = Order::find($id);
        $order->delete();
        return response()->json(['message' => 'Success', 'data' => null]);
    }
}
