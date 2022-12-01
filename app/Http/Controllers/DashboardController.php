<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Customer;
use App\Models\Supplier;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function index() 
    {
      $orders = Order::where('terkirim', null)->get();
      return view('dashboard', ['orders' => $orders, 'customers' => Customer::all(), 'suppliers' => Supplier::all()]);
    }
}