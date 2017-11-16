<!DOCTYPE html>
<html lang="es">
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

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="{{ asset('adminlte/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="{{ asset('adminlte/css/AdminLTE.min.css') }}">

    <link rel="stylesheet" href="{{ asset('adminlte/css/skins/skin-blue.min.css') }}">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="/" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>S</b>ER</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Coffeeta</b></span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <!-- /.messages-menu -->

                    <!-- Notifications Menu -->

                    <!-- Tasks Menu -->

                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="/adminlte/img/avatar-default.png" class="user-image" alt="User Image">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs">{{Auth::user()->name}} {{Auth::user()->surname}}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="/adminlte/img/avatar-default.png" class="img-circle" alt="User Image">

                                <p>
                                    {{Auth::user()->name}} {{Auth::user()->surname}} - {{Auth::user()->rol->rol}}
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="{{ url('/profile/'.Auth::user()->id) }}" class="btn btn-default btn-flat">Perfil</a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{ route('logout') }}" class="btn btn-default btn-flat"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->

                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="/adminlte/img/avatar-default.png" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>{{Auth::user()->name}} {{Auth::user()->surname}}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{Auth::user()->rol->rol}}</a>
                </div>
            </div>

            <!-- search form (Optional) -->
            <!--<form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>-->
            <!-- /.search form -->

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">
                <li class="header">Menu</li>
                <!-- Optionally, you can add icons to the links -->

            @if (!Auth::guest())

                    <li class="{{ (Request::is('users*') || Request::is('adduser*') || Request::is('editUser*') || Request::is('deleteUser*') || Request::is('profile*')) ? 'active open' : ''  }}"><a href="{{ url('/users') }}"><i class="fa fa-link"></i> <span>Usuarios</span></a></li>

                    <li class="{{ (Request::is('news*') || Request::is('addNew*') || Request::is('editNew*') || Request::is('deleteNew*') || Request::is('approveNew*')) ? 'active open' : ''  }}"><a href="{{ url('/news') }}"><i class="fa fa-link"></i> <span>Noticias</span></a></li>

                @endif
                <!--
                <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
                <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
                <li class="treeview">
                    <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#">Link in level 2</a></li>
                        <li><a href="#">Link in level 2</a></li>
                    </ul>
                </li>-->
            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            @yield('page-header')
        </section>

        <!-- Main content -->
        <section class="content">
            @yield('content')
            <!-- Your Page Content Here -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">

        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2017 <a href="/">Coffeeta</a>.</strong> Todos los derechos reservados.
    </footer>

    <!-- Control Sidebar -->
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="/adminlte/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/adminlte/bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/js/app.min.js"></script>

@yield('scripts')

</body>
</html>