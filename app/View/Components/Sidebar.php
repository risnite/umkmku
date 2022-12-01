<?php

namespace App\View\Components;

use App\Models\Order;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class Sidebar extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    
    public function render()
    {
      $userId = Auth::User()->id;
      $orders = Order::where('terkirim', null)->orWhere('lunas', null)->get();
      return view('layouts.sidebar', ['orders' => $orders, 'userId' => $userId]);
    }
}