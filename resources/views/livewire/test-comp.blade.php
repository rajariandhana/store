<div class="w-32">
    {{-- <div x-data="{price:123,quantity:1,totalPrice:123}" class="flex flex-row items-center border border-gray-400 rounded-md bg-purple-50">
        <select x-model="quantity" @change="totalPrice=price*quantity,$wire.tf()" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
            @for ($i=1;$i<=10;$i++)
                <option value="{{$i}}">{{$i}}</option>
            @endfor
        </select>
        <span x-text="totalPrice" class="bg-pink-300">

        </span>
    </div> --}}
    <div x-data="{ quantity: @entangle('quantity'), price: @entangle('price') }">
        <input type="number" x-model="quantity" min="1" max="10" class="border rounded p-2">

        <div class="mt-2">
            Total: <span x-text="quantity * price"></span>
        </div>
    </div>


</div>
