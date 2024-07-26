<x-layout>
<h1>orders page</h1>
    @foreach ($orders as $order)
        @dump($order)
    @endforeach
</x-layout>
