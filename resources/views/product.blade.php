<x-layout>
    <div class="max-w-screen-xl py-4 mx-auto lg:px-6">

        <div class="flex flex-col md:flex-row gap-4">
            <div
                class="overflow-hidden rounded-tl-xl rounded-tr-xl bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                    alt="" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
            </div>
            <div>
                <h2 class=" font-semibold">{{ $product->name }}</h2>
                <h3 class="font-normal">IDR {{ $product->price }}</h3>
                <form class=" mt-2 lg:mt-4">
                    <x-radio-select :name="'Size'" :options="$product->sizes" :delimiter="'|'">
                    </x-radio-select>
                    <x-radio-select :name="'Color'" :options="$product->colors" :delimiter="'|'">
                    </x-radio-select>

                    <button type="submit"
                        class="mt-3 flex w-auto items-center justify-center rounded-xl border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Add to Cart
                    </button>
                </form>
            </div>
        </div>
    </div>
    </div>
</x-layout>
