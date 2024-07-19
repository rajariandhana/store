<div class="flex flex-row items-center px-4 py-2 bg-red-50 rounded-md justify-between">
    <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="" class="object-cover object-center w-4 h-4 lg:h-6 lg:w-6">
    {{-- <h4>{{$product->name}}</h4> --}}
    {{-- <div>qty</div> --}}
    {{-- <div>{{$product->price}}</div> --}}
    {{-- <div>{{$product->price}} * qty</div> --}}
    <div class="flex flex-col">
        <h4>{{$item['name']}}</h4>
        <p>{{$item['selectedSize']}} - {{$item['selectedColor']}}</p>
    </div>
    <div>
        {{$item['qty']}}
    </div>
    <div>
        {{$item['price']}}
    </div>
</div>
