<html lang="lang="{{ str_replace('_', '-', app()->getLocale()) }}"">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <script src="{{ asset('js/laravel.js') }}" defer></script>
    <link href="{{ asset('css/laravel.css') }}" rel="stylesheet">
    @yield('title')
</head>
<body>
    @include('layout.nav')
    @yield('content')
</body>
</html>
