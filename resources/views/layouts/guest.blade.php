<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

                    <!-- Styles -->
                    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

                    <!-- Scripts -->
                    <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans h-full text-gray-900 antialiased">
        <div class="h-screen flex flex-col justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div class="w-full  sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
