<!DOCTYPE html>
<html lang="es">
<head>
    {{-- header common --}}
    @section('metadata')
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
    @show
    <title>CoffeeTalk Argentina</title>

    <!--CSS-->
    <link href='https://fonts.googleapis.com/css?family=Miriam+Libre:400,700|Source+Sans+Pro:200,400,700,600,400italic,700italic' rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/js/flexboxgrid.min.css') }}" type="text/css"/>
    <!--CSS-->
    @yield('css')
    <!--FACEBOOK-->
    <meta property="og:title" content="CoffeeTalk Argentina"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="http://www.coffeetalk.com.ar/assets/img/charts/img-video-marketing.gif"/>
    <meta property="og:image:secure_url" content="http://www.coffeetalk.com.ar/assets/img/charts/img-video-marketing.gif"/>
    <meta property="og:image:type" content="image/jpg"/>
    <meta property="og:url" content="http://www.coffeetalk.com.ar/"/>
    <meta property="og:site_name" content="CoffeeTalk Argentina"/>
    <meta property="og:locale" content="es_ES"/>
    <meta property="og:locale:alternate" content="es_ES"/>
    <meta property="og:video" content="https://www.youtube.com/watch?v=1zvDqEFOnFk"/>
    <meta property="article:section" content="Home"/>
    <meta property="fb:admins" content="475456482519655"/>
    <!--FACEBOOK-->

    <!--TWITTER-->
    <meta property="twitter:account_id" content="1225377846"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@CoffeeTalkARG"/>
    <meta name="twitter:title" content="CoffeeTalk Argentina"/>
    <meta name="twitter:description" content="Agencia de marketing y comunicación estratégica especializada en proyectos de posicionamiento de marca. ¡Bienvenido a CoffeeTalk Argentina!"/>
    <meta name="twitter:site:id" content="1225377846"/>
    <meta name="twitter:image" content="http://www.coffeetalk.com.ar/assets/img/charts/img-video-marketing.gif"/>
    <meta name="twitter:image:src" content="http://www.coffeetalk.com.ar/assets/img/charts/img-video-marketing.gif"/>
    <meta name="twitter:domain" content="http://www.coffeetalk.com.ar/"/>
    <!--TWITTER-->

    <!--GOOGLE MAPS-->
    <meta property="place:location:latitude" content="-34.598867"/>
    <meta property="place:location:longitude" content="-58.384839"/>
    <meta property="business:contact_data:street_address" content="Av. Córdoba 1247"/>
    <meta property="business:contact_data:locality" content="Capital Federal"/>
    <meta property="business:contact_data:postal_code" content="C1055AAC"/>
    <meta property="business:contact_data:country_name" content="Argentina"/>
    <meta property="business:contact_data:email" content="social@coffeetalk.com.ar"/>
    <meta property="business:contact_data:phone_number" content="+5411 5263-0279"/>
    <meta property="business:contact_data:website" content="http://www.coffeetalk.com.ar"/>
    <!--GOOGLE MAPS-->

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

    <script src="{{ asset('assets/js/vue.min.js') }}"></script>
    @yield('header-scripts')
</head>


{{-- container section --}}

@yield('content')

<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script>
    var algolia_app_id      = '8BB87I11DE';
    var algolia_search_key  = '8e1d446d61fce359f69cd7c8b86a50de';
    var version             = '5.5';
</script>
<script id="search_suggestion_template" type="text/template"></script>
<script src="{{ asset('assets/js/jquery.smooth-scroll.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.docs article h1+ul li a').click(function(event) {
            event.preventDefault();
            var link = this;
            $.smoothScroll({
                scrollTarget: link.hash
            });
        });
        $('.sidebar-menu a').click(function(event) {
            event.preventDefault();
            var link = this;
            $.smoothScroll({
                scrollTarget: link.hash
            });
        });
    });
</script>
<script src="{{ asset('assets/js/viewport-units-buggyfill.js') }}"></script>

@yield('scripts')
@show


</body>
</html>