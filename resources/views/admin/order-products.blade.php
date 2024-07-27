<x-admin-layout>
    <a href="{{ route('admin.orders') }}" class="text-indigo-500 text-sm mb-3 items-center flex">

        <svg class="w-6 h-6 text-indigo-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
            height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m17 16-4-4 4-4m-6 8-4-4 4-4" />
        </svg>
        Back to orders
    </a>
    <div class="mb-2">
        <h6>Order ID: {{ $order->id }}</h6>
        <p class="mb-0 text-gray-500">Created at: {{ $order->created_at }}</p>
        <p class="mb-0 text-gray-500">SubTotal: {{ $order->subTotal }}</p>
        <p class="mb-0 text-gray-500">Total cost: {{ $order->totalCost }}</p>
        <p class="mb-0 text-gray-500">Status: {{ $order->status }}</h6>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-4">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Province ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        City ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Address
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd:bg-white even:bg-gray-50 border-b">
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $order->name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $order->email }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $order->province_id }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $order->city_id }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $order->address }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-4">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Courier
                    </th>
                    <th scope="col" class="px-6 py-3">
                        CourierService
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Delivery Time
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Weight
                    </th>
                    <th scope="col" class="px-6 py-3">
                        DeliveryCost
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd:bg-white even:bg-gray-50 border-b">
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $order->courier }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $order->courierService }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $order->deliveryTime }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $order->weight }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $order->deliveryCost }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Product ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Size
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Color
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Qty
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Qty * Price
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order->products as $item)
                    {{-- @dump($item) --}}
                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $item->product_id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $item->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->pivot->size }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->pivot->color }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->pivot->quantity }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->pivot->price }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin-layout>
