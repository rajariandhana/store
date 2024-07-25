<div class="bg-gray-50 w-96 px-4 py-4 rounded-lg shadow-sm">
    <form action="">
        <div>
            <label for="customerName">Name</label>
            <input required type="text" name="customerName"
                class="bg-white border border-gray-300  text-sm rounded w-full px-2 py-1 mb-2">
            <label for="customerEmail">Email</label>
            <input required type="email" name="customerEmail"
                class="bg-white border border-gray-300  text-sm rounded w-full px-2 py-1 mb-2">
        </div>
        <div class="mt-3">
            <div>
                <label for="province">Province</label>
                <div>
                    <select wire:change="SelectProvince($event.target.value)" name="province" id=""
                        class="bg-white border border-gray-300  text-sm rounded w-full mb-2 px-2 py-1">
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
                            class="bg-white border border-gray-300  text-sm rounded w-full mb-2 px-2 py-1">
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
                    class="bg-white border border-gray-300  text-sm rounded w-full h-8 px-2 py-2 mb-3">
            @endif
            @if (!is_null($selectedCity))
                <div>
                    <label for="courier">Courier</label>
                    <div>
                        <select wire:change="SelectCourier($event.target.value)" name="courier" id=""
                            class="bg-white border border-gray-300  text-sm rounded w-full mb-2 px-2 py-1">
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
                <div class="flex flex-col gap-2">
                    @foreach ($deliveryOptions as $key => $deliveryOption)
                        <label class="cursor-pointer">
                            <input wire:click="SelectDelivery({{ $key }})" type="radio" class="peer sr-only"
                                name="deliveryOption" value="{{ $key }}" />
                            <div
                                class="flex flex-col rounded-md px-4 py-1 transition-all
                    ring-1 ring-gray-400 bg-white hover:ring-indigo-300
                    peer-checked:ring-indigo-500 peer-checked:ring-offset-1">
                                <span>{{ $deliveryOption['service'] }} | IDR {{ $deliveryOption['cost'][0]['value'] }}</span>
                                <span class="text-sm text-gray-500">estimated delivery time: {{ $deliveryOption['cost'][0]['etd'] }} days</span>
                            </div>
                        </label>
                    @endforeach
                </div>
            @endif
        </div>
        @if (!is_null($subTotal) && !is_null($deliveryCost) && !is_null($totalCost))
            <div>
                <hr>
                <div class="flex justify-between text-base text-gray-900">
                    <span class="font-semibold">Subtotal</span>
                    <span>IDR {{ $subTotal }}</span>
                </div>
                <div class="flex justify-between text-base text-gray-900">
                    <span class="font-semibold">Delivery cost</span>
                    <span>IDR {{ $deliveryCost }}</span>
                </div>
                <hr>
                <div class="flex justify-between text-base text-gray-900">
                    <span class="font-semibold">Payment</span>
                    <span>IDR {{ $totalCost }}</span>
                </div>
                <button wire:click="Order"
                    class="mt-3 w-full flex items-center justify-center rounded-lg border border-transparent bg-indigo-500 px-6 py-3 text-base font-medium text-white shadow-sm">
                    ORDER
                </button>
            </div>
        @endif

    </form>
</div>
