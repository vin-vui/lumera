<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="is-loading">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Lumera') }}</title>

        <!-- Scripts -->
        @vite(['resources/scss/guest.scss', 'resources/js/guest.js'])
        <script defer data-domain="lumera.vinvui.com" src="https://plausible.io/js/script.js"></script>
    </head>
    <body data-barba="wrapper" data-module-website data-animate>
        @include('layouts.snippets.sprite')
        @include('layouts.snippets.header')
        <div data-barba="container">
            {{ $slot }}
            @include('layouts.snippets.footer')
        </div>
        @include('layouts.snippets.popins')

        @livewireScripts

    </body>
</html>
