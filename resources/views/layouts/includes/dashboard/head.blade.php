<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Al-Badr System Project Training.</title>

    @if (App::isLocale('ar'))
        @vite(['resources/css/app-rtl.css'])
        <style>
            .navbar-expand-md .navbar-nav .dropdown-menu {top: 50px; left: 50px;}
            .dropdown-menu-arrow:before { transform: rotate(46deg); }
        </style>
    @else
        @vite(['resources/css/app-ltr.css'])
        <style>
            .navbar-expand-md .navbar-nav .dropdown-menu {top: 50px; right: 50px;}
        </style>
    @endif

    @yield('css')
    @stack('css')
</head>
