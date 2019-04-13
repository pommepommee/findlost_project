<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>@yield('titre_page')</title>
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="/js/app.js"></script>

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
        <div id="main_container">
          @yield('page')
        </div>
        @include('footer')
    </body>

</html>
