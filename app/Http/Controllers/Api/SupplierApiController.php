<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierApiController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::orderBy('nama')->get();
        return response()->json(['message' => 'Success', 'data' => $suppliers]);
    }

    public function store(Request $request)
    {
        $supplier = Supplier::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'produk' => json_decode($request->produk),
        ]);
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
            ->update([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'telp' => $request->telp,
                'produk' => json_decode($request->produk),
            ]);
        return response()->json(['message' => 'Success', 'data' => $supplier]);
    }

    public function destroy($id)
    {
        $supplier = Supplier::find($id);
        $supplier->delete();
        return response()->json(['message' => 'Success', 'data' => null]);
    }
}
