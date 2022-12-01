<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardHeader extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */

    public $name;

    public $href;

    public function __construct($name, $href)
    {
        $this->name = $name;
        $this->href = $href;
    }
     
    public function render()
    {
        return view('layouts.card-header');
    }
}
