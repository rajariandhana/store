<div class="flex flex-col">
    <h4 class="text-lg">{{ $name }}</h4>
    <div class="">
        <ul class="-ml-8 text-gray-500 list-none list-inside">
            @foreach ($links as $link)
                <li>
                    <a href="{{ $link['link'] }}" class="text-gray-500 no-underline hover:text-gray-900">
                        {{ $link['name'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
