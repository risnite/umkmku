<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index() 
    {
        return view('supplier.index', ['suppliers' => Supplier::all()]);
    }

    public function create() 
    {
        return view('supplier.create');
    }
    
    public function store(Request $request)
    {
        $supplier = new Supplier;
        $supplier->nama = $request->nama;
        $supplier->alamat = $request->alamat;
        $supplier->telp = $request->telp;
        $supplier->produk = $request->produk;
        $supplier->save();
        return redirect()->route('supplier');
    }

    public function edit($id)
    {
        $supplier = Supplier::find($id);
        return view('supplier.edit', ['supplier' => $supplier]);
    }

    public function update(Request $request, $id)
    {
        $supplier = Supplier::find($id);
        $supplier->nama = $request->nama;
        $supplier->alamat = $request->alamat;
        $supplier->telp = $request->telp;
        $supplier->produk = $request->produk;
        $supplier->save();
        return redirect()->route('supplier');
    }

    public function delete($id)
    {
      $supplier = Supplier::find($id);
      $supplier->delete();
      return redirect()->route('supplier');
    }
}
