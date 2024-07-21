<?php

namespace App\Livewire;

use App\Http\Controllers\CartController;
use App\Models\Product;

use Livewire\Component;

class CartItem extends Component
{
    public $product;
    public $item = [];
    public $quantity;
    public $price;

    public function mount($item)
    {
        $this->item = $item;
        $this->product = Product::findOrFail($item['product_id']);
        $this->quantity = $item['quantity'];
        $this->price = $this->product->price;
        // $this->updateTotalPrice();
    }
    public function setQuantity(){
        if ($this->quantity > 10) {
            $this->quantity = 10;
        } elseif ($this->quantity < 1) {
            $this->quantity = 1;
        } else {
            $this->quantity = $this->quantity;
        }
        $cc = new CartController();
        // $cc = app(CartController::class);
        $cc->setQuantity($this->item['key'],$this->quantity);
    }
    public function tes(){
        dump(69);
    }

    public function render()
    {
        return view('livewire.cart-item');
    }
}
