<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <title>Oren Video Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        {{ config('app.name', 'Laravel') }} - {{ Request::path() }}
    </title>
    <link rel="icon" href="{{ asset('dashboard/images/Favicon.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/fontello.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/fontello-codes.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/thumbs-embedded.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/color.css') }}">

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!--Livewire-->
    @livewireStyles
</head>

<body>

    <div class="wrapper">

        <!--Begin::Section-->
        @yield('content')
        <!--End::Section-->

    </div>
    <!--wrapper end-->



    <script src="{{ asset('dashboard/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/popper.js') }}"></script>
    <script src="{{ asset('dashboard/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/script.js') }}"></script>
    <!--Livewire-->
    @livewireScripts
</body>

</html>
