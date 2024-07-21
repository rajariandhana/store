<div class="flex flex-row gap-10"
x-data="{ totalItems: @entangle('totalItems'), totalPrice: @entangle('totalPrice')}">
    <div class="flex flex-col gap-3 bg-red-400">
        @foreach ($items as $item)
            <livewire:cart-item :item="$item"/>
        @endforeach
    </div>
    <div class="flex flex-col bg-blue-200"
        >
        <h4>Order Summary</h4>
        {{-- <h5>Total items: {{$totalItems}}</h5> --}}
        {{-- <h5>Total price: {{$totalPrice}}</h5> --}}
        <span x-text="totalItems"></span>
        <span x-text="totalPrice"></span>
        <form wire:submit.prevent="checkout" action="">
            @csrf
            <button class="bg-green-100 px-2 py-2">Checkout</button>
        </form>
        <form wire:submit.prevent="clearCart" action="">
            @csrf
            <button class="bg-red-100 px-2 py-2">clear cart</button>
        </form>
    </div>
</div>
