<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="is-loading">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', 'Lumera | Influence marketing')</title>
        <meta name="description" content="@yield('description', 'Chez Lumera, nous accompagnons les créateurs de contenu et les entreprises dans la création de campagnes d\'influence marketing performantes')"></head>

        <!-- Scripts -->
        <script src="{{asset('assets/vendor/loconative-min.js')}}"></script>
        @vite(['resources/scss/guest.scss', 'resources/js/guest.js'])
        <script defer data-domain="lumera.vinvui.com" src="https://plausible.io/js/script.js"></script>
    </head>
    <body data-barba="wrapper" data-module-website data-animate>
        @include('layouts.snippets.sprite')
        <div data-barba="container" data-barba-namespace="{{ request()->route()->uri == '/' ? 'home' : 'page' }}">
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
