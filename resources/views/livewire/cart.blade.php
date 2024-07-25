<div class="flex flex-col lg:flex-row gap-10">
    @if ($checkingOut)
        <div class="">
            <button wire:click="ToggleCheckOut"
                class="text-indigo-500 text-sm mb-3 items-center flex">

                <svg class="w-6 h-6 text-indigo-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m17 16-4-4 4-4m-6 8-4-4 4-4"/>
                  </svg>
                Back to cart
            </button>
            @livewire('customer-form')
        </div>
    @else
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
                                    <div class="flex gap-2 items-center mt-2">
                                        {{-- @if ($checkingOut)
                                        <span
                                            class="text-gray-500 text-sm h-8 text-center">
                                            Qty {{ $item['quantity'] }}
                                        </span>
                                        <span
                                            class="text-gray-500 text-sm h-8 text-center">
                                            IDR {{ $item['quantity'] * $item['product']->price }}
                                        </span>
                                    @else --}}
                                        <select wire:change="SetQuantity('{{ $item['key'] }}', $event.target.value)"
                                            wire:model="items.{{ $loop->index }}.quantity"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-10 h-8 text-center">
                                            @for ($i = 1; $i <= 10; $i++)
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                        </select>
                                        <button wire:click="RemoveItem('{{ $item['key'] }}')" class="text-indigo-500">
                                            Remove
                                        </button>
                                        {{-- @endif --}}
                                    </div>
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
                    <span>IDR {{ $totalPrice }}</span>
                </div>
                <button wire:click="ClearCart" class="text-indigo-500">
                    Clear Cart
                </button>
                <button wire:click="ToggleCheckOut"
                    class="mt-3 w-full flex items-center justify-center rounded-lg border border-transparent bg-indigo-500 px-6 py-3 text-base font-medium text-white shadow-sm">
                    Checkout
                </button>
            </div>

        </div>
    @endif

</div>
