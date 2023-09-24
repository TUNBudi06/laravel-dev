<!DOCTYPE html>
<html lang="lang="{{ str_replace('_', '-', app()->getLocale()) }}"">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link href="{{ asset('css/laravel.css') }}" rel="stylesheet">
    @yield('head')
</head>
<body>
    @include("layout.nav")
    @yield('content')
    @include("layout.footer")
    <script src="{{ asset('js/laravel.js') }}" defer></script>
</body>
</html>
