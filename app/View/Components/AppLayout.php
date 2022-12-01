<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */

    public $user;

    public function __construct()
    {
        $this->user = Auth::User();
    }
    
    public function render()
    {
        return view('layouts.app');
    }
}
