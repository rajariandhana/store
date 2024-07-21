<?php

namespace App\Livewire;
use App\Http\Controllers\CartController;

use Livewire\Component;

class Cart extends Component
{
    public $items;

    public function mount($items)
    {
        $this->items = $items;
    }
    public function clearCart(){
        $cc = new CartController();
        $cc->Clear();
        // $this->items = $items;

    }
    public function render()
    {
        return view('livewire.cart');
    }
}
