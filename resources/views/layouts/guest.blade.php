<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'StudyInfo') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-primary antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-primary-50  p-2">



        <div class="flex flex-col  bg-white p-5  ">
            <div class="flex flex-row gap-3 items-center justify-center pb-4">
                <div>
                    <img class="h-12 md:h-14 w-auto" src="{{ asset('/assets/logos/logo.png') }}" alt="STUDYINFO Logo" />
                </div>
                <!---->
                <h1 class="text-lg md:text-xl font-bold  text-primary my-auto">StudyInfo</h1>

            </div>

            <!---->
            {{ $slot }}


        </div>
    </div>
</body>

</html>
