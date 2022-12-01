<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index() 
    {
        return view('customer.index', ['customers' => Customer::all()]);
    }

    public function create() 
    {
        return view('customer.create');
    }
    
    public function store(Request $request)
    {
        $customer = new Customer;
        $customer->nama = $request->nama;
        $customer->alamat = $request->alamat;
        $customer->telp = $request->telp;
        $customer->save();
        return redirect()->route('customer');
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('customer.edit', ['customer' => $customer]);
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->nama = $request->nama;
        $customer->alamat = $request->alamat;
        $customer->telp = $request->telp;
        $customer->save();
        return redirect()->route('customer');
    }

    public function delete($id)
    {
      $customer = Customer::find($id);
      $customer->delete();
      return redirect()->route('customer');
    }
}
