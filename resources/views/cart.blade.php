<x-layout>
    <div class="flex flex-col">
        <div>
            <form action="cartClear" method="POST">
                @csrf
                <button type="submit">clear cart</button>
            </form>
        </div>
        <div class="flex flex-col gap-3">
            @foreach ($items as $item)
                <x-cart-item :item="$item">

                </x-cart-item>
            @endforeach
        </div>
    </div>
</x-layout>
