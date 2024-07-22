<x-layout>
    {{-- <div class="max-w-screen-xl px-4 py-4 mx-auto lg:px-6"> --}}
    <div class="max-w-2xl px-4 mx-auto sm:px-6 lg:max-w-7xl lg:px-8">
        {{-- <div class="grid justify-center grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4"> --}}
        <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
            @foreach ($products as $product)
                <x-product-card :product="$product">
                </x-product-card>
            @endforeach
        </div>
    </div>
</x-layout>
