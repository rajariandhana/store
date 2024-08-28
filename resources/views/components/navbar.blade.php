<nav x-data="{ open: false }" @click.outside="open=false"
class="fixed top-0 z-20 flex flex-row items-center justify-between w-full px-6 py-3 bg-gray-100 shadow-md">
    <a href="{{route('home')}}" class="flex flex-row items-center gap-2 text-2xl text-gray-800 ">
        <svg class="w-8 h-8 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path d="M17.537 12.625a4.421 4.421 0 0 0 2.684 4.047 10.96 10.96 0 0 1-1.384 2.845c-.834 1.218-1.7 2.432-3.062 2.457-1.34.025-1.77-.794-3.3-.794-1.531 0-2.01.769-3.275.82-1.316.049-2.317-1.318-3.158-2.532-1.72-2.484-3.032-7.017-1.27-10.077A4.9 4.9 0 0 1 8.91 6.884c1.292-.025 2.51.869 3.3.869.789 0 2.27-1.075 3.828-.917a4.67 4.67 0 0 1 3.66 1.984 4.524 4.524 0 0 0-2.16 3.805m-2.52-7.432A4.4 4.4 0 0 0 16.06 2a4.482 4.482 0 0 0-2.945 1.516 4.185 4.185 0 0 0-1.061 3.093 3.708 3.708 0 0 0 2.967-1.416Z"/>
          </svg>
        <span>MyStore</span>          
    </a>
    <ul class="items-center hidden p-0 mt-3 text-2xl font-light text-black lg:flex lg:flex-row gap-x-6">
        <li>
            <a class="text-black" href="{{route('top')}}">Top</a>
        </li>
        <li>
            <a class="text-black" href="{{route('bottom')}}">Bottom</a>
        </li>
        <li>
            <a class="text-black" href="{{route('footwear')}}">Footwear</a>
        </li>
        <li>
            <a class="text-black" href="{{route('other')}}">Other</a>
        </li>
        <li>
            <a href="{{route('cart')}}" class="flex flex-row items-center px-2 py-2 text-white bg-gray-800 rounded-lg gap-x-3">
                <svg class="w-6 h-6 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312"/>
                  </svg>
                <span>Cart</span>                  
            </a>
        </li>
    </ul>
    <button @click="open = !open" class="lg:hidden">
        <svg class="w-12 h-12 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
            height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14" />
        </svg>
    </button>
    <div :class="{ 'translate-x-0': open, 'translate-x-full': !open }"
        class="fixed top-0 right-0 z-20 flex flex-col justify-between h-full px-6 py-3 transition-transform duration-300 ease-in-out transform translate-x-full bg-gray-900 shadow-lg lg:hidden w-80 rounded-tl-xl rounded-bl-xl">
        <div class="">
            <div class="flex items-center justify-between mb-4">
                <a href="{{route('home')}}" class="text-xl font-bold text-white hover:text-gray-300">Home</a>
                <button @click="open = !open">
                    <svg class="w-10 h-10 text-white hover:text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18 17.94 6M18 18 6.06 6" />
                    </svg>
                </button>
            </div>
            
            <div class="flex flex-col justify-between h-full">
                <ul class="flex flex-col p-0 text-lg text-white gap-y-1">
                    <li>
                        <a class="text-white" href="{{route('top')}}">Top</a>
                    </li>
                    <li>
                        <a class="text-white" href="{{route('bottom')}}">Bottom</a>
                    </li>
                    <li>
                        <a class="text-white" href="{{route('footwear')}}">Footwear</a>
                    </li>
                    <li>
                        <a class="text-white" href="{{route('other')}}">Other</a>
                    </li>
                    <li>
                        <a class="text-white" href="{{route('cart')}}">Cart</a>
                    </li>
                </ul>
                {{-- <a href="{{route('cart')}}" class="flex flex-row items-center gap-2 px-2 py-2 text-white bg-gray-800 rounded-lg">
                    <svg class="w-8 h-8 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312"/>
                      </svg>
                    <span>Shopping Cart</span>                  
                </a> --}}
            </div>
        </div>
        
    </div>
</nav>

{{-- <script>
document.addEventListener('click', function(event) {
    var panel = document.querySelector('[x-ref="panel"]');
    if (panel && !panel.contains(event.target)) {
        panel.__x.$data.open = false;
    }
});
</script> --}}
