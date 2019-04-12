<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('titre')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="/css/projet.css" rel="stylesheet">

    <link rel="logo_placemaker" href="img/logo_placemaker.png">
    <link rel="shortcut icon" type="image/ico" href="img/logo_placemaker.png" />
</head>
<body>
  <!-- @include('header') -->
  @include('template_menu')

    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @include('footer')
</body>
</html>
