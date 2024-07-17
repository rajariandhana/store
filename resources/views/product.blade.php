<x-layout>
    <div class="max-w-screen-xl py-4 mx-auto lg:px-6">

        <div class="bg-white">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-tl-xl rounded-tr-xl bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                </div>
            <div>
                {{$product->name}}
                {{$product->price}}
            </div>
        </div>
    </div>
</x-layout>
