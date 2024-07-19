<x-layout>
    {{-- <x-cart :items="$items">
        
    </x-cart> --}}
    @foreach ($items as $item)
        <x-cart-item>
            
        </x-cart-item>
    @endforeach
</x-layout>
