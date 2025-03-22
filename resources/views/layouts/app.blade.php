<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'SudyInfo') }}</title>
    <link rel="shortcut icon" href="{{ URL::asset('assets/logos/logo.png') }}" />



    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body class="font-sans antialiased overflow-y-hidden">
    <div class="bg-gray-100 min-h-screen">

        <!-- Page Content -->
        <div x-data="{ open: false }" class="flex 3xl:container mx-auto h-screen w-full">

            @include('layouts.sidebar')
            <main class="h-[100dvh]  w-full overflow-y-scroll ">
                <x-notification />


                @include('layouts.navigation')
                {{ $slot }}
            </main>
        </div>
    </div>


    <!-- Tinymce -->
    <script src="{{ asset('assets/tinymce/tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
            selector: 'textarea.editor',
            height: 400,
            plugins: [
                'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                'insertdatetime', 'media', 'table', 'help', 'wordcount'
            ],
            toolbar: 'undo redo | blocks | ' +
                'bold italic underline backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }',
            branding: false,
            promotion: false,

        });
    </script>
</body>



</html>