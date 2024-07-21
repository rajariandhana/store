<div>
    <h2 class="font-semibold ">{{ $product->name }}</h2>
    <h3 class="font-normal">IDR {{ $product->price }}</h3>
    <form wire:submit.prevent="addToCart" action=""
        class="mt-2  lg:mt-4" >
        @csrf
        <input wire:model="product_id" type="hidden" name="product_id" value="{{$product->product_id}}">
        {{-- <input wire:model="price" type="hidden" name="price" value="{{$product->price}}"> --}}
        {{-- <input wire:model="quantity" type="hidden" name="quantity" value=1> --}}
        <x-radio-select :name="'Size'" :wireKey="'selectedSize'" :options="$product->sizes" :delimiter="'|'">
        </x-radio-select>
        <x-radio-select :name="'Color'" :wireKey="'selectedColor'" :options="$product->colors" :delimiter="'|'">
        </x-radio-select>

        <button
            class="flex items-center justify-center w-auto px-8 py-3 mt-3 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-xl hover:bg-indigo-700">
            Add to Cart
        </button>
    </form>
</div>
