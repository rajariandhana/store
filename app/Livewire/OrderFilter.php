<?php

namespace App\Http\Livewire;
namespace App\Livewire;

use Livewire\Component;
use App\Models\Order;
use Carbon\Carbon;

class OrderFilter extends Component
{
    public $startDate;
    public $endDate;
    // public $status;

    public function mount()
    {
        // Set default values if needed
        $this->startDate = Carbon::now()->startOfMonth()->toDateString();
        $this->endDate = Carbon::now()->endOfMonth()->toDateString();
        // $this->status = '';
    }

    public function render()
    {
        $orders = Order::query()
            ->when($this->startDate && $this->endDate, function ($query) {
                $query->whereBetween('created_at', [$this->startDate, $this->endDate]);
            })
            // ->when($this->status, function ($query) {
            //     $query->where('status', $this->status);
            // })
            ->get();

        return view('livewire.order-filter', [
            'orders' => $orders,
        ]);
    }
}
