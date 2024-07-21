<?php

namespace App\Livewire;

use Livewire\Component;

class TestComp extends Component
{
    // public $selectedOption;
    // public function updatedSelectedOption($value){
    //     dd($value);
    // }
    public $quantity=1;
    public $price=10;
    public function tf(){
        dump(69);
    }
    public function updatedQuantity($value)
    {
        if ($value > 10) {
            $this->quantity = 10;
        } elseif ($value < 1) {
            $this->quantity = 1;
        } else {
            $this->quantity = $value;
        }
    }
    public function render()
    {
        return view('livewire.test-comp');
    }
}
