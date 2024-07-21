<?php

namespace App\Livewire;
use App\Http\Controllers\CartController;

use Livewire\Component;

class Cart extends Component
{
    public $items;

    public function mount()
    {
        $cc = new CartController();
        $this->items = $cc->GetItems();
    }
    public function clearCart(){
        $cc = new CartController();
        $cc->Clear();
        $this->items = $cc->GetItems();

        // $this->items = $items;

    }
    public function render()
    {
        return view('livewire.cart');
    }
}
