<x-layout>
    <div class="max-w-screen-xl py-4 mx-auto lg:px-6">
        <div class="flex flex-col gap-4 md:flex-row">
            <div
                class="overflow-hidden bg-gray-200 rounded-tl-xl rounded-tr-xl lg:aspect-none group-hover:opacity-75 lg:h-80">
                @php
                    $src = url('/') . '/products/' . $product->product_id . '.avif';
                @endphp
                @if (!$src)
                @php
                    $src = "https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg";
                @endphp
                @endif
                <img src="{{ $src }}" alt=""
                        class="object-cover object-center w-full h-full lg:h-full lg:w-full">

            </div>
            <livewire:product-form :product="$product" />
            {{-- {{$product->name}} --}}
            {{-- @livewire(ProductForm::class,['product'=>$product]) --}}
        </div>
    </div>
    {{-- </div> --}}
</x-layout>
