<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        @include('layouts.navigation')
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <button class="btn btn-outline-primary" onclick="pesan.berhasil('Data berhasil ditambahkan')">Test</button>
                </div>
            </div>
        </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="{{asset('js/script.js')}}"></script>
    <script src="{{asset('js/sweetalert2.all.js')}}"></script>
    @include('alert')
</body>

</html>