<?php

namespace App\Livewire;

use Livewire\Component;

class CartItem extends Component
{
    public $product;
    public $item=[];

    public function render()
    {
        return view('livewire.cart-item');
    }
    public function Increment(){
        $this->item['qty']++;
    }
    public function Decrement(){
        $this->item['qty']--;
    }
}
