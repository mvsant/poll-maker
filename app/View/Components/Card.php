<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $xData;
    public function __construct($xData)
    {
        //
        $this->xData = $xData;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }
}
