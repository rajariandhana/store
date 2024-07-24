<?php

namespace App\Livewire;
use App\Http\Controllers\CartController;

use Livewire\Component;

class Cart extends Component
{
    public $items;
    // public $totalPrice;
    // public $totalItems;

    public function mount()
    {
        $cc = new CartController();
        $this->items = $cc->GetItems();
    }
    public function increaseQuantity($key)
    {
        $cc = new CartController();
        $cc->IncrementItem($key);
        $this->items = $cc->GetItems();
    }

    public function decreaseQuantity($key)
    {
        $cc = new CartController();
        $cc->DecrementItem($key);
        $this->items = $cc->GetItems();
    }

    public function removeItem($key)
    {
        $cc = new CartController();
        $cc->RemoveItem($key);
        $this->items = $cc->GetItems();
    }
    public function clearCart(){
        $cc = new CartController();
        $cc->Clear();
        $this->items = $cc->GetItems();
        $this->totalPrice = $cc->GetTotalPrice();
        $this->totalItems = $cc->GetTotalItems();
        // $this->items = $items;
    }

    public function calculateTotalPrice()
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item['quantity'] * $item['product']->price;
        }
        return $total;
    }

    public function calculateTotalItems()
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item['quantity'];
        }
        return $total;
    }

    public function render()
    {
        $cc = new CartController();
        return view('livewire.cart',[
            'items'=>$this->items,
            'totalPrice' => $this->calculateTotalPrice(),
            'totalItems' => $this->calculateTotalItems(),
        ]);
    }
}
