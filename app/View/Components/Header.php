<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */

    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
     
    public function render()
    {
        return view('layouts.header');
    }
}
