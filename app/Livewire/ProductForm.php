<?php

namespace App\Livewire;

use App\Http\Controllers\CartController;
use Livewire\Component;
use Livewire\Attributes\Rule;

class ProductForm extends Component
{
    public $product;

    #[Rule('required|min:6|max:6')]
    public $product_id='';
    #[Rule('required')]
    public $selectedSize='';
    #[Rule('required')]
    public $selectedColor='';
    public function mount($product = null){
        $this->product = $product;
        $this->product_id = $product->product_id;
    }
    public function render()
    {
        return view('livewire.product-form');
    }
    public function addToCart(){
        $this->validate();
        // dump($this->product_id);
        // dump($this->selectedSize);
        // dump($this->selectedColor);
        $cc = new CartController();
        $cc->store($this->product_id,$this->selectedSize,$this->selectedColor);
    }
}
