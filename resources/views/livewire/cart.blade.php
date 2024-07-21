<div class="flex flex-row gap-10">
    <div class="flex flex-col gap-3 bg-red-400">
        @foreach ($items as $item)
            <livewire:cart-item :item="$item"/>
        @endforeach
    </div>
    <div class="bg-blue-200">
        <h4>Order Summary</h4>
        <form wire:submit.prevent="clearCart" action="">
            @csrf
            <button class="bg-orange-100 px-2 py-2">clear cart</button>
        </form>
    </div>
</div>
