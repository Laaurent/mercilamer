<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', "Cap sur L\'ocean") }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/11d3fd4abaca4e9a6e588761fa753397?family=Maax+Rounded" rel="stylesheet" type="text/css"/>
    <link href="//db.onlinewebfonts.com/c/70cea237fa600030410451537e89862f?family=Founders+Grotesk+Mono" rel="stylesheet" type="text/css"/>
    <!-- Styles -->
    <link href="{{ asset('css/font.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">

    <link rel="icon" href="/images/icons/mediaLogo.svg" />
    
</head>
<body>
    <div id="app">
    <navbar-component></navbar-component>
        <main id="main">
            @yield('content')
        </main>
    <footer-component></footer-component>
    </div>
</body>
</html>
