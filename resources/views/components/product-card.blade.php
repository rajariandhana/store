{{-- <a href="/product/{{ $product->product_id }}" class="group">
    <div class="bg-white px-2 py-2 rounded-lg shadow-md max-w-72">
        <div class="w-64 h-64 bg-gray-300">

        </div>
        <div class="mt-2">
            <p class="text-lg">{{ $product->name }}</p>
            <p class="text-md">{{ $product->price }}</p>
        </div>
    </div>
</a> --}}
<a href="/product/{{ $product->product_id }}" class="no-underline">
    <div class="group relative bg-white rounded-xl shadow-md">
        <div
            class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-tl-xl rounded-tr-xl bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
            @php
                $src = url('/') . '/products/' . $product->product_id . '.avif';
            @endphp
            @if (!$src)
                @php
                    $src = 'https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg';
                @endphp
            @endif
            <img src="{{ $src }}" alt=""
                class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="px-3 py-2">
            <p class="text-8 font-bold text-gray-800 mb-2">{{ $product->name }} </p>
            <p class="text-sm font-medium text-slate-600 mb-2">IDR {{ $product->price }}</p>
        </div>
    </div>
</a>
