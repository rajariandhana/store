<x-layout>
    <div class="max-w-screen-xl py-4 mx-auto lg:px-6">

        <div class="flex gap-4">
            <div
                class="overflow-hidden rounded-tl-xl rounded-tr-xl bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                    alt="" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
            </div>
            <div>
                <h2 class=" font-semibold">{{ $product->name }}</h2>
                <h3 class="font-normal">IDR {{ $product->price }}</h3>
                <form class="mt-10">
                    <div class="mt-10">
                        <fieldset aria-label="Choose a size" class="mt-4">
                            <div x-data{selectedSize:''} class="grid grid-cols-4 gap-4 sm:grid-cols-8 lg:grid-cols-4">
                                @foreach (explode('|', $product->sizes) as $size)
                                <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6
                                checked:border-indigo-500
                                ">
                                    <input type="radio" name="size-choice" value="{{$size}}" class="sr-only">
                                    <span>{{$size}}</span>
                                    <!--
                                      Active: "border", Not Active: "border-2"
                                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                                    -->
                                    <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                                  </label>
                                @endforeach

                            </div>
                        </fieldset>
                    </div>
                    <button type="submit"
                        class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Add to bag
                    </button>
                </form>
            </div>
            {{-- @foreach ($colors as $color)
                    {{$color}}
                @endforeach --}}
        </div>
    </div>
    </div>
</x-layout>
