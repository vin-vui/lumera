<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="is-loading">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', 'Lumera | Agence de créateurs')</title>
        <meta name="description" content="@yield('description', 'Chez Lumera, nous accompagnons les créateurs de contenu et les entreprises dans la création de campagnes d\'influence marketing performantes')">


        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest') }}">
        <link rel="mask-icon" href="{{ asset('asset/favicon/safari-pinned-tab.svg') }}" color="#F4F4F4">
        <meta name="msapplication-TileColor" content="#F4F4F4">
        <meta name="theme-color" content="#F4F4F4">

        <!-- Scripts -->
        <script defer data-domain="lumera.social" src="https://plausible.io/js/script.js"></script>
        <script src="{{ asset('assets/vendor/loconative-min.js') }}"></script>
        @vite(['resources/scss/guest.scss', 'resources/js/guest.js'])
    </head>
    <body data-barba="wrapper" data-module-website data-animate>
        @include('layouts.snippets.sprite')
        <div data-barba="container" data-barba-namespace="{{ request()->route() && request()->route()->uri == '/' ? 'home' : 'page' }}">
            <div data-module-scroll data-scroll-container>
                @include('layouts.snippets.header')
                {{ $slot }}
                @include('layouts.snippets.footer')
                @include('layouts.snippets.popins')
            </div>
        </div>

        @livewireScripts

    </body>
</html>
