<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="author" content="CoffeeTalk Argentina"/>
    <meta name="designer" content="CoffeeTalk Argentina"/>
    <meta name="copyright" content="Copyright © 2018 CoffeeTalk Argentina"/>
    <meta name="description" content="Agencia de marketing y comunicación estratégica especializada en proyectos de posicionamiento de marca. ¡Bienvenido a CoffeeTalk Argentina!"/>
    <meta name="keywords" content="CoffeeTalk, marketing, estrategia, marketing digital, comunicación interna, comunicación externa, comunicación cross, marketing de empresas, agencia de diseño, agencia de traducción, agencia de marketing, traducciones, eventos, organización de eventos, branding"/>
    <meta name="robots" content="index, follow"/>
    <meta name="googlebot" content="index, follow"/>
    <meta name="revisit-after" content="1 day"/>
    <meta name="rating" content="general"/>
    <meta name="distribution" content="web"/>
    <meta name="geo.country" content="AR"/>
    <meta name="geo.region" content="AR-C"/>
    <meta name="geo.placename" content="Argentina"/>

    <!--FAVICON-->
    <link type="image/png" rel="apple-touch-icon" sizes="57x57" href="/assets/img/favicon/apple-icon-57x57.png"/>
    <link type="image/png" rel="apple-touch-icon" sizes="60x60" href="/assets/img/favicon/apple-icon-60x60.png"/>
    <link type="image/png" rel="apple-touch-icon" sizes="72x72" href="/assets/img/favicon/apple-icon-72x72.png"/>
    <link type="image/png" rel="apple-touch-icon" sizes="76x76" href="/assets/img/favicon/apple-icon-76x76.png"/>
    <link type="image/png" rel="apple-touch-icon" sizes="114x114" href="/assets/img/favicon/apple-icon-114x114.png"/>
    <link type="image/png" rel="apple-touch-icon" sizes="120x120" href="/assets/img/favicon/apple-icon-120x120.png"/>
    <link type="image/png" rel="apple-touch-icon" sizes="144x144" href="/assets/img/favicon/apple-icon-144x144.png"/>
    <link type="image/png" rel="apple-touch-icon" sizes="152x152" href="/assets/img/favicon/apple-icon-152x152.png"/>
    <link type="image/png" rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicon/apple-icon-180x180.png"/>
    <link type="image/png" rel="icon" sizes="192x192"  href="/assets/img/favicon/android-icon-192x192.png"/>
    <link type="image/png" rel="icon" sizes="32x32" href="/assets/img/favicon/favicon-32x32.png"/>
    <link type="image/png" rel="icon" sizes="96x96" href="/assets/img/favicon/favicon-96x96.png"/>
    <link type="image/png" rel="icon" sizes="16x16" href="/assets/img/favicon/favicon-16x16.png"/>
    <!--FAVICON-->

    <title>CoffeeTalk Argentina</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        CoffeeTalk Argentina
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    @if (Auth::user()->roles_id==1)
                                    <li><a href="{{ url('/users') }}">Usuarios</a></li>
                                    @endif
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>    
    
</body>
</html>
