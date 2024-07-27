<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="/">
    @vite(['resources/css/app.css','resources/sass/app.scss', 'resources/js/app.js'])
    {{-- @vite(['resources/css/app.css','resources/js/app.js']) --}}
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @livewireStyles
</head>

{{-- <body class="h-full bg-red-100 bg-gray-50 md:bg-green-100 lg:bg-blue-100"> --}}
<body class="h-full">
    <div class="min-h-full">
        {{-- <x-navbar></x-navbar> --}}
        {{-- <x-header>{{$title}}</x-header> --}}
        <nav class="py-4 bg-white shadow-sm">

            <div class="justify-between px-4 flex">
                <div class="flex">
                    <x-nav-link href="{{route('admin.dashboard')}}">Dashboard</x-nav-link>
                    <x-nav-link href="/admin/orders">Orders</x-nav-link>
                </div>
                <div class="flex">
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <button class="bg-red-500 rounded-md px-3 py-1 text-white" type="submit">
                            Logout
                        </button>
                    </form>

                </div>
            </div>
        </nav>

        <main>
            <div class="flex flex-col justify-center px-6 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                {{$slot}}
                {{-- @yield('content') --}}
            </div>
        </main>
        {{-- <x-footer>

        </x-footer> --}}
    </div>
    @livewireScripts
</body>

</html>
