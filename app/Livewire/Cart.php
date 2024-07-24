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
    public function IncrementItem($key)
    {
        $cc = new CartController();
        $cc->IncrementItem($key);
        $this->items = $cc->GetItems();
    }

    public function DecrementItem($key)
    {
        $cc = new CartController();
        $cc->DecrementItem($key);
        $this->items = $cc->GetItems();
    }

    public function RemoveItem($key)
    {
        $cc = new CartController();
        $cc->RemoveItem($key);
        $this->items = $cc->GetItems();
    }
    public function ClearCart(){
        $cc = new CartController();
        $cc->Clear();
        $this->items = $cc->GetItems();
    }

    public function TotalPrice()
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item['quantity'] * $item['product']->price;
        }
        return $total;
    }

    public function TotalItems()
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
            'totalPrice' => $this->TotalPrice(),
            'totalItems' => $this->TotalItems(),
        ]);
    }
}
