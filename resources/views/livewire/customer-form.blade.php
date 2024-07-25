<div class="bg-red-100">
    <form action="">
        <div>
            <label for="customerName">Name</label>
            <input required type="text" name="customerName"
                class="bg-gray-50 border border-gray-300  text-sm rounded w-full h-8 px-2 py-2">
            <label for="customerEmail">Email</label>
            <input required type="email" name="customerEmail"
                class="bg-gray-50 border border-gray-300  text-sm rounded w-full h-8 px-2 py-2">
        </div>
        <div class="mt-3">
            <div>
                <label for="province">Province</label>
                <div>
                    <select wire:change="SelectProvince($event.target.value)" name="province" id=""
                        class="bg-gray-50 border border-gray-300  text-sm rounded w-full h-8">
                        <option value="" selected disabled>Choose Province</option>
                        @foreach ($provinces as $province)
                            <option value="{{ $province['province_id'] }}">{{ $province['province'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            @if (!is_null($cities))
                <div>
                    <label for="city">City/Regency</label>
                    <div>
                        <select wire:change="SelectCity($event.target.value)" name="city" id=""
                            class="bg-gray-50 border border-gray-300  text-sm rounded w-full h-8">
                            <option value="" selected disabled>Choose City/Regency</option>
                            @foreach ($cities as $city)
                                <option value="{{ $city['city_id'] }}">{{ $city['type'] }} {{ $city['city_name'] }}
                                </option>
                            @endforeach
                        </select>
                        {{-- @foreach ($cities as $city)
                        <option value="{{ $city['city_id'] }}">{{$city['type']}} {{ $city['city_name'] }}</option>
                    @endforeach --}}
                    </div>

                </div>
            @endif
            @if (!is_null($selectedCity))
                <label for="customerAddress">Address</label>
                <input required type="text" name="customerAddress"
                    class="bg-gray-50 border border-gray-300  text-sm rounded w-full h-8 px-2 py-2">
            @endif
            @if (!is_null($selectedCity))
                <div>
                    <label for="courier">Courier</label>
                    <div>
                        <select wire:change="SelectCourier($event.target.value)" name="courier" id=""
                            class="bg-gray-50 border border-gray-300  text-sm rounded w-full h-8">
                            <option value="" selected disabled>Choose courier</option>
                            <option value="jne">JNE</option>
                            <option value="tiki">TIKI</option>
                            <option value="pos">POS</option>
                        </select>
                    </div>
                </div>
            @endif
            @if (!is_null($selectedProvince) && !is_null($selectedCity) && !is_null($selectedCourier) && !is_null($deliveryOptions))
            {{-- @dd($deliveryOptions) --}}
                @foreach ($deliveryOptions as $key=>$deliveryOption)
                    <label class="cursor-pointer">
                        <input wire:click="SelectDelivery({{$key}})" type="radio" class="peer sr-only" name="deliveryOption"
                            value="{{$key}}" />
                        <div
                            class="flex justify-center items-center rounded-md px-4 py-1 transition-all
                    ring-1 ring-gray-400 hover:bg-gray-100
                    peer-checked:ring-indigo-500 peer-checked:ring-offset-1">
                            <span>Service: {{$deliveryOption['service']}}</span>
                            <span>Delivery fee: {{$deliveryOption['cost'][0]['value']}}</span>
                            <span>Delivery time: {{$deliveryOption['cost'][0]['etd']}}</span>
                        </div>
                    </label>
                @endforeach
            @endif
        </div>
        @if (!is_null($subTotal) && !is_null($deliveryCost) && !is_null($totalCost))
            <div>
                Subtotal: {{$subTotal}}
                Delivery cost: {{$deliveryCost}}
                Payment: {{$totalCost}}
            </div>
        @endif

    </form>
</div>
