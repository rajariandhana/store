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
<div class="flex flex-col lg:flex-row gap-10">
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right">
            {{-- <thead class="text-xs text-gray-700 uppercase s">
                <tr>
                    <th scope="col" class="px-6 py-3"></th>
                    <th scope="col" class="px-6 py-3"></th>
                    <th scope="col" class="px-6 py-3"></th>
                    <th scope="col" class="px-6 py-3"></th>
                    <th scope="col" class="py-3 w-32"></th>
                </tr>
            </thead> --}}
            <tbody>
                @foreach ($items as $item)
                    <tr class="bg-white border-b">
                        <td class="px-2 lg:px-6 py-4">
                            @php
                                $src = url('/') . '/products/' . $item['product']->product_id . '.avif';
                            @endphp
                            @if (!$src)
                                @php
                                    $src =
                                        'https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg';
                                @endphp
                            @endif
                            <img src="{{ $src }}" alt=""
                                class="object-cover object-center w-24 h-24 lg:h-32 lg:w-32 rounded-lg">
                        </td>
                        <td class="px-2 lg:px-6 py-4">
                            <div class="flex flex-col">
                                <span class="text-lg lg:text-xl font-semibold">{{ $item['product']->name }}</span>
                                <span class="text-gray-500">{{ $item['variant'] }}</span>
                                <div class="flex gap-2 lg:hidden items-center mt-2">
                                    <select wire:change="SetQuantity('{{ $item['key'] }}', $event.target.value)"
                                        wire:model="items.{{ $loop->index }}.quantity"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-10 h-8 text-center">
                                        @for ($i = 1; $i <= 10; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                    <button wire:click="RemoveItem('{{ $item['key'] }}')"
                                        class="text-indigo-500">Remove</button>
                                </div>
                            </div>
                        </td>
                        <td class="px-2 lg:px-6 py-4">
                            <div class="hidden lg:flex lg:flex-col items-center justify-center gap-2">
                                <select wire:change="SetQuantity('{{ $item['key'] }}', $event.target.value)"
                                    wire:model="items.{{ $loop->index }}.quantity"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-12 h-10 text-center">
                                    @for ($i = 1; $i <= 10; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                                <button wire:click="RemoveItem('{{ $item['key'] }}')"
                                    class="text-indigo-500">Remove</button>
                            </div>
                        </td>
                        <td class="px-2 lg:px-6 py-4 text-lg w-32">
                            <span class="w-full">IDR {{ $item['quantity'] * $item['product']->price }}</span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="px-4 py-6 sm:px-6 w-full lg:w-1/3">
        <div class="">
            <div class="flex justify-between text-base font-medium text-gray-900">
                <span>Subtotal</span>
                <span>$262.00</span>
            </div>
            <button wire:click="ClearCart" class="text-indigo-500">Clear Cart</button>
        </div>
        <form class="mt-3" wire:submit.prevent="checkout" action="">
            @csrf
            <button
                class="w-full flex items-center justify-center rounded-lg border border-transparent bg-indigo-500 px-6 py-3 text-base font-medium text-white shadow-sm">Checkout</button>
        </form>
    </div>
    {{-- <div class="bg-red-50 w-1/3">
        <div class="flex justify-between font-semibold">
            <span>Subtotal</span>
            <span>IDR {{ $totalPrice }}</span>
        </div>
        <div>
            <button wire:click="ClearCart">Clear Cart</button>
        </div>
        <form wire:submit.prevent="checkout" action="">
            @csrf
            <button class="bg-indigo-500 px-2 py-2 w-full rounded-lg text-white text-xl font-semibold">CHECK
                OUT</button>
        </form>
    </div> --}}
</div>
