<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'STUDYINFO') }} - @yield('title', 'Home')</title>

    <link rel="shortcut icon" href="{{ URL::asset('assets/logos/logo.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Additional Styles -->
    @stack('styles')
</head>

<body class="font-sans antialiased bg-gray-50">
    <div class="min-h-screen flex flex-col">
        <!-- Navigation Bar -->
        @include('web.partials.nav')

        <!-- Alert Messages -->
        @if (session('success') || session('error') || session('info'))
            <div class="container mx-auto px-4 mt-4">
                @if (session('success'))
                    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 4000)"
                        class="bg-green-100 border-l-4 border-green-600 text-green-700 p-4 mb-4 rounded shadow"
                        role="alert">
                        <p>{{ session('success') }}</p>
                        <button @click="show = false" class="float-right">&times;</button>
                    </div>
                @endif

                @if (session('error'))
                    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 4000)"
                        class="bg-red-100 border-l-4 border-red-600 text-red-700 p-4 mb-4 rounded shadow"
                        role="alert">
                        <p>{{ session('error') }}</p>
                        <button @click="show = false" class="float-right">&times;</button>
                    </div>
                @endif

                @if (session('info'))
                    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 4000)"
                        class="bg-blue-100 border-l-4 border-secondary text-secondary-700 p-4 mb-4 rounded shadow"
                        role="alert">
                        <p>{{ session('info') }}</p>
                        <button @click="show = false" class="float-right">&times;</button>
                    </div>
                @endif
            </div>
        @endif

        <!-- Page Content -->
        <main class="flex-grow pt-20">
            @yield('content')
        </main>

        <!-- Footer -->
        @include('web.partials.footer')
    </div>

    <!-- Scripts -->
    @stack('scripts')
</body>

</html>





{{-- 
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'STUDYINFO') }} - {{ $title ?? 'Hue African Industrial Training Center' }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="font-sans antialiased bg-gray-50 min-h-screen flex flex-col">
    <header>
        @include('web.partials.navbar')
    </header>

    <main class="flex-grow">
        {{ $slot }}
    </main>

    <footer>
        @include('web.partials.footer')
    </footer>
</body>
</html> --}}
