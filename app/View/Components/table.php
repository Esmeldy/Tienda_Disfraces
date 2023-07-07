<?php

namespace App\View\Components;

use Closure;
use Darryldecode\Cart\CartCollection;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Darryldecode\Cart\Cart;

class table extends Component
{
    public $type=[];
    public CartCollection $cart;
    /**
     * Create a new component instance.
     */
    public function __construct($type,$cart)
    {
        $this->type = $type;
        $this->cart = $cart;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table');
    }
}
