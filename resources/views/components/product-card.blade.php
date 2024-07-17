<a href="/product/{{ $product->productID }}" class="underline:none">
    <div class="bg-white px-2 py-2 rounded-lg shadow-md max-w-72">
        <div class="w-64 h-64 bg-gray-300">

        </div>
        <div class="mt-2">
            <p class="text-lg">{{ $product->name }}</p>
            <p class="text-md">{{ $product->price }}</p>
        </div>
    </div>
</a>
