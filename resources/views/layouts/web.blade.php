<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'STUDYINFO') }} - @yield('title', 'Home')</title>

    <link rel="shortcut icon" href="{{ URL::asset('assets/logos/logo.png') }}" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>


    <!-- Additional Styles -->
    @stack('styles')
</head>

<body class="font-sans antialiased overflow-x-hidden text-gray-600 ">
    <div class="min-h-screen flex flex-col">
        <!-- Navigation Bar -->
        <header class="sticky top-0 z-[1000]">
            @include('web.partials.nav')
        </header>

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
                        class="bg-red-100 border-l-4 border-secondary text-red-700 p-4 mb-4 rounded shadow"
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
        <main class="flex-grow overflow-y-auto">
            @yield('content')
        </main>

        <!-- Whatsapp Icon -->
        <div
            class="size-10 md:size-16 flex justify-center items-center animate-wiggle hover:animate-none rounded-full fixed z-[9999] bottom-5 md:bottom-10 right-5 md:right-10 p-3">
            <a target="_blank" href="https://wa.me/+254741551733?text=hello%20StudyInfo"><i
                    class="bi bi-whatsapp text-green-600 text-2xl md:text-3xl"></i></a>
        </div>

        <!-- Footer -->
        @include('web.partials.footer')
    </div>

    <!-- Scripts -->
    @stack('scripts')
</body>

</html>
