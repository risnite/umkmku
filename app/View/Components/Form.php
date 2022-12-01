<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Form extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */

    public $action;
    public $title;
    public $submit;
    public $cancel;
    public $color;

    public function __construct($action, $title, $submit, $cancel, $color)
    {
        $this->action = $action;
        $this->title = $title;
        $this->submit = $submit;
        $this->cancel = $cancel;
        $this->color = $color;
    }
     
    public function render()
    {
        return view('layouts.form');
    }
}
