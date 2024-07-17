<x-layout>
    <div class="max-w-screen-xl px-4 py-4 mx-auto lg:px-6">
        <div class="justify-center grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach ($products as $product)
                <x-product-card :product="$product">
                </x-product-card>
            @endforeach
        </div>
    </div>
</x-layout>
