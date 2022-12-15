<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerApiController extends Controller
{
  public function index()
  {
    $customers = Customer::all();
    return response()->json(['message' => 'Success', 'data' => $customers]);
  }

  public function store(Request $request)
  {
    $customer = Customer::create($request->all());
    return response()->json(['message' => 'Success', 'data' => $customer]);
  }

  public function edit($id)
  {
    $customer = Customer::find($id);
    return response()->json(['message' => 'Success', 'data' => $customer]);
  }

  public function update(Request $request, $id)
  {
    $customer = Customer::find($id)
      ->update($request->all());
    return response()->json(['message' => 'Success', 'data' => $customer]);
  }

  public function delete($id)
  {
    $customer = Customer::find($id);
    $customer->delete();
    return response()->json(['message' => 'Success', 'data' => null]);
  }
}
