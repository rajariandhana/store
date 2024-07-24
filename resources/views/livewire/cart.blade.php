{{-- <div class="flex flex-row gap-10"
x-data="{ totalItems: @entangle('totalItems'), totalPrice: @entangle('totalPrice')}">
    <div class="flex flex-col gap-3 bg-red-400">
        @foreach ($items as $item)
            <livewire:cart-item :item="$item"/>
        @endforeach
    </div>
    <div class="flex flex-col bg-blue-200"
        >
        <h4>Order Summary</h4> --}}
        {{-- <h5>Total items: {{$totalItems}}</h5> --}}
        {{-- <h5>Total price: {{$totalPrice}}</h5> --}}
        {{-- <span x-text="totalItems"></span>
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
</div> --}}
<div>
    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Variant</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
                <tr>
                    <td>{{ $item['product']->name }}</td>
                    <td>{{ $item['variant'] }}</td>
                    <td>
                        <div class="relative flex items-center max-w-[8rem]">
                            <button wire:click="DecrementItem('{{ $item['key'] }}')"
                                class="bg-gray-100 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11">
                                <svg class="w-3 h-3 text-gray-900 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 18 2">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M1 1h16" />
                                </svg>
                            </button>
                            <span class="border border-gray-300 items-center">{{ $item['quantity'] }}</span>
                            <button wire:click="IncrementItem('{{ $item['key'] }}')"
                                class="bg-gray-100 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11">
                                <svg class="w-3 h-3 text-gray-900 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 18 18">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 1v16M1 9h16" />
                                </svg>
                            </button>
                        </div>
                    </td>
                    <td>{{ $item['quantity'] * $item['product']->price }}</td>
                    <td>
                        <button wire:click="RemoveItem('{{ $item['key'] }}')">Remove</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        Total Items: {{ $totalItems }}
    </div>
    <div>
        Total Price: {{ $totalPrice }}
    </div>
    <div>
        <button wire:click="ClearCart">Clear Cart</button>
    </div>
</div>
