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
                        <td>
                            <select wire:change="SetQuantity('{{ $item['key'] }}', $event.target.value)" wire:model="items.{{ $loop->index }}.quantity">
                                @for ($i = 1; $i <= 10; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </td>
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
