<div x-data="{ quantity: @entangle('quantity'), price: @entangle('price'),
    checkQuantity(){
        if (this.quantity < 1) {
            this.quantity = 1;
        }
        else if (this.quantity > 10) {
            this.quantity = 10;
        }
        }
    }"
    class="flex flex-row items-center justify-between px-4 py-2 rounded-md bg-red-50">
    <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt=""
        class="object-cover object-center w-4 h-4 lg:h-6 lg:w-6">
    <div class="flex flex-col gap-0 bg-blue-50">
        <h4 class="m-0 bg-yellow-50">{{ $product->name }}</h4>
        <p class="text-sm text-gray-400 bg-orange-50">{{ $item['variant'] }}</p>
    </div>
    <div class="relative flex items-center max-w-[8rem]">
        <button @click="quantity > 1 ? quantity-- : quantity = 1; checkQuantity(); $wire.setQuantity()"
            class="bg-gray-100 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11">
            <svg class="w-3 h-3 text-gray-900 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 18 2">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h16" />
            </svg>
        </button>
        <input type="number" x-model="quantity" min="1"max="10"
            class="bg-gray-50 border-x-0 border-gray-300 h-11 text-center text-gray-900 text-sm block w-12 py-2.5"
            value="{{ $item['quantity'] }}" required />
            <button @click="quantity < 10 ? quantity++ : quantity = 10; checkQuantity(); $wire.setQuantity()"
            class="bg-gray-100 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11">
            <svg class="w-3 h-3 text-gray-900 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 1v16M1 9h16" />
            </svg>
        </button>
    </div>
    <button @click="$wire.removeItem()">remove</button>
    <span x-text="quantity >=1 && quantity<=10? quantity * price:'error'"></span>
</div>
