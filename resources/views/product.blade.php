<x-layout>
    <div class="max-w-screen-xl py-4 mx-auto lg:px-6">

        <div class="flex flex-col gap-4 md:flex-row">
            <div
                class="overflow-hidden bg-gray-200 rounded-tl-xl rounded-tr-xl lg:aspect-none group-hover:opacity-75 lg:h-80">
                <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                    alt="" class="object-cover object-center w-full h-full lg:h-full lg:w-full">
            </div>
            <div>
                <h2 class="font-semibold ">{{ $product->name }}</h2>
                <h3 class="font-normal">IDR {{ $product->price }}</h3>
                <form method="POST" action="{{route('cart.store')}}"
                    class="mt-2  lg:mt-4" >
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product->product_id}}">
                    <input type="hidden" name="price" value="{{$product->price}}">
                    <input type="hidden" name="quantity" value=1>
                    <x-radio-select :name="'Size'" :options="$product->sizes" :delimiter="'|'">
                    </x-radio-select>
                    <x-radio-select :name="'Color'" :options="$product->colors" :delimiter="'|'">
                    </x-radio-select>

                    <button type="submit"
                        class="flex items-center justify-center w-auto px-8 py-3 mt-3 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-xl hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Add to Cart
                    </button>
                </form>
            </div>
        </div>
    </div>
    {{-- </div> --}}
</x-layout>
