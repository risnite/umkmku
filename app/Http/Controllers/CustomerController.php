<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customer.index', ['customers' => Customer::all()->sortBy('nama')]);
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
    {
        Customer::create($request->all());
        return redirect()->route('customer');
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('customer.edit', ['customer' => $customer]);
    }

    public function update(Request $request, $id)
    {
        Customer::find($id)
            ->update($request->all());
        return redirect()->route('customer');
    }

    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect()->route('customer');
    }
}
