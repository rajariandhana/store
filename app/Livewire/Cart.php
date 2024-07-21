<?php

namespace App\Livewire;
use App\Http\Controllers\CartController;

use Livewire\Component;

class Cart extends Component
{
    public $items;
    public $totalPrice;
    public $totalItems;

    public function mount()
    {
        $cc = new CartController();
        $this->items = $cc->GetItems();
        $this->totalPrice = $cc->GetTotalPrice();
        $this->totalItems = $cc->GetTotalItems();
    }
    public function clearCart(){
        $cc = new CartController();
        $cc->Clear();
        $this->items = $cc->GetItems();
        $this->totalPrice = $cc->GetTotalPrice();
        $this->totalItems = $cc->GetTotalItems();
        // $this->items = $items;
    }
    public function render()
    {
        return view('livewire.cart');
    }
}
