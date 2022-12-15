<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierApiController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();
        return response()->json(['message' => 'Success', 'data' => $suppliers]);
    }

    public function store(Request $request)
    {
        $supplier = Supplier::create($request->all());
        return response()->json(['message' => 'Success', 'data' => $supplier]);
    }

    public function edit($id)
    {
        $supplier = Supplier::find($id);
        return response()->json(['message' => 'Success', 'data' => $supplier]);
    }

    public function update(Request $request, $id)
    {
        $supplier = Supplier::find($id)
            ->update($request->all());
        return response()->json(['message' => 'Success', 'data' => $supplier]);
    }

    public function delete($id)
    {
        $supplier = Supplier::find($id);
        $supplier->delete();
        return response()->json(['message' => 'Success', 'data' => null]);
    }
}
