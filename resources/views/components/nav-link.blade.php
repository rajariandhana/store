@props(['active'=>false])
<a {{$attributes}}
    class="{{ $active ? 'text-black ' : '' }}text-gray-400 rounded-md px-3 py-2 text-md font-medium flex items-center gap-2 no-underline hover:underline hover:text-black"
    aria-current="{{ $active ? 'page':false}}">{{$slot}} </a>
