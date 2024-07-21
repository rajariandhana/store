<x-layout>
    <livewire:cart :items="$items"/>

    {{-- <div class="flex flex-row gap-10">
        <div class="flex flex-col gap-3 bg-red-400">
            @foreach ($items as $item)
                <livewire:cart-item :item="$item"/>
            @endforeach
        </div>
        <div class="bg-blue-200">
            <h4>Order Summary</h4>
            <form action="cartClear" method="POST">
                @csrf
                <button type="submit">clear cart</button>
            </form>
        </div>
    </div> --}}
</x-layout>
