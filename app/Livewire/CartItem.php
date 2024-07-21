<?php

namespace App\Livewire;

use Livewire\Component;

class CartItem extends Component
{
    public $product;
    public $item = [];
    public $quantity;
    public $totalPrice;

    public function mount($item)
    {
        $this->item = $item;
        $this->quantity = $item['quantity'];
        // $this->totalPrice = $item['price'] * $this->quantity;
        $this->calculateTotalPrice();
    }

    public function updatedQuantity($value)
    {
        // $this->quantity = $value;
        // $this->totalPrice = $this->item['price'] * $value;
        $this->calculateTotalPrice();
    }
    public function calculateTotalPrice()
    {
        $this->totalPrice = $this->item['price'] * $this->quantity; // Calculate total price
    }

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
