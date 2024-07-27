<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="/">
    @vite(['resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js'])
    {{-- @vite(['resources/css/app.css','resources/js/app.js']) --}}
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @livewireStyles
</head>

<body>
    <div class="min-h-full">
        <main>
            <div class="flex justify-center px-6 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="bg-gray-50 w-96 px-4 py-4 rounded-lg shadow-sm">
                    <div class="w-full flex justify-center mb-3">
                    <a href="{{url('home')}}" class="no-underline text-indigo-500 flex gap-2 items-center">
                        <svg class="w-6 h-6 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5"/>
                          </svg>

                        <h4 class="mb-0">Store</h4>
                    </a>
                </div>
                    <form method="POST" action="{{ route('admin.login') }}">
                        @csrf
                        <div>
                            <label for="email">Email</label>
                            <input type="email" name="email"
                                class="bg-white border border-gray-300  text-sm rounded w-full px-2 py-1 mb-1">
                            @error('email')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="password">Password</label>
                            <input type="password" name="password"
                                class="bg-white border border-gray-300  text-sm rounded w-full px-2 py-1 mb-1">
                            @error('password')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit"
                            class="mt-3 w-full flex items-center justify-center rounded-lg border border-transparent bg-indigo-500 px-6 py-3 text-base font-medium text-white shadow-sm">
                            Login
                        </button>
                    </form>
                </div>
            </div>
        </main>

    </div>
    @livewireScripts

</body>

</html>
