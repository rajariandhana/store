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

        </div>
    </form>
</div>
