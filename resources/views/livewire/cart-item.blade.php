<div class="flex flex-row items-center px-4 py-2 bg-red-50 rounded-md justify-between">
    <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="" class="object-cover object-center w-4 h-4 lg:h-6 lg:w-6">
    <div class="flex flex-col gap-0 bg-blue-50">
        <h4 class="bg-yellow-50 m-0">{{$item['name']}}</h4>
        <p class="text-sm text-gray-400 bg-orange-50">{{$item['selectedSize']}} - {{$item['selectedColor']}}</p>
    </div>
    <div class="bg-purple-50 flex flex-row items-center rounded-md border border-gray-400">
        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            <option selected></option>
            <option value=1>1</option>
            <option value=2>2</option>
            <option value=3>3</option>
            <option value=4>4</option>
          </select>
    </div>
    <div class="bg-pink-300">
        {{$item['price']}}
    </div>
</div>
