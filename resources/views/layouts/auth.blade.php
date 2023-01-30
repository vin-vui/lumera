<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        {{-- <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"> --}}
        <link rel="shortcut icon" href="{{ asset('Symbol_Color@2x.png') }}" type="image/x-icon">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @toastScripts
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gradient-to-br from-indigo-400 via-rose-300 to-orange-400">
            <main>
                {{ $slot }}
            </main>
        </div>
        @livewireScripts
    </body>
</html>
