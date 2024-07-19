<x-layout>
    <form action="cartClear" method="POST">
        @csrf
        <button type="submit">clear cart</button>
    </form>
    @foreach ($items as $item)
    {{-- {{$item}} --}}
        {{-- <x-cart-item :item="$item">

        </x-cart-item> --}}
    @endforeach
</x-layout>
