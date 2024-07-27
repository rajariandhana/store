<x-admin-layout>
    <h1>Orders</h1>
    {{-- <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Order ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Created at
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Detail
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr
                        class="odd:bg-white even:bg-gray-50 border-b">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $order->id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $order->created_at }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $order->status }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('admin.order-product', ['order_id' => $order->id]) }}">View Order</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div> --}}
    @livewire('order-filter')
</x-admin-layout>
