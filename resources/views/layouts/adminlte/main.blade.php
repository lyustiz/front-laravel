<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Titulo -->  
  <title> @yield( 'titulo', config('app.name') ) </title>

  @section('css')

    <link rel="stylesheet" href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ url('/assets/font-awesome/css/fontawesome-all.min.css') }}">

    <link rel="stylesheet" href="{{ url('/assets/Ionicons/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ url('/assets/jvectormap/css/jquery-jvectormap-1.2.2.css') }}">

    <link rel="stylesheet" href="{{ url('/assets/toast/css/jquery.toast.min.css') }}">
      
    <!-- Adminlte --> 

    <link rel="stylesheet" href="{{ url('/assets/adminlte/css/AdminLTE.min.css') }}">

    <link rel="stylesheet" href="{{ url('/assets/adminlte/css/skins/skin-red.min.css') }}">

    <!-- fuente -->

    <link rel="stylesheet" href="{{ url('/assets/google-fonts/css/raleway.css') }}">

    <!-- Estilos General -->

    <link href="{{ asset('css/ssapp.css') }}" rel="stylesheet">

  @show

</head>

<body class="hold-transition skin-red sidebar-mini">

<div class="wrapper">

    <!--Cabecera -->
    <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
        <span class="logo-mini"><b>B</b></span>
        <span class="logo-lg"><b>Bandes</b></span>
        </a>

        <!-- Navegacion  -->
        @include('layouts.adminlte.nav', ['usuario' => 'Luis Yustiz'])

    </header>

    <!-- Menu lateral -->
    <aside class="main-sidebar">
        <section class="sidebar">
            @include('layouts.adminlte.menu', ['data' => 'data'])
        </section>
    </aside>

    <!-- Contenido -->
    <div class="content-wrapper">

        <!-- Encabezado Contenido -->
        <section class="content-header">
       
            <!-- Subtitulo -->
            <h1> @yield( 'subtitulo', 'Titulo Seccion' )</h1>

            <!-- Ruta -->
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-tachometer-alt"></i> Padre</a></li>
                <li class="active">Subtitulo</li>
            </ol>

        </section>

        <!-- Cuerpo del Contenido -->
        <section class="content container-fluid">

            @yield('contenido')

        </section>

    </div>

    <!-- Footer -->
    @include('layouts.adminlte.footer', ['data' => 'data'])

    <!-- Panel Derecho -->
    @include('layouts.adminlte.panel', ['data' => 'data'])
  
</div>

 @section('js')
      
    <script src="{{ url('/assets/jquery/js/jquery.min.js') }}"></script>

    <script src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }}"></script>

    <script src="{{ url('/assets/toast/js/jquery.toast.min.js') }}"></script>

    <!-- Adminlte --> 

    <script src="{{ url('/assets/adminlte/js/adminlte.min.js') }}"></script>

    <script src="{{ url('/assets/plugins/js/jquery.slimscroll.min.js') }}"></script>

    <script src="{{ url('/assets/plugins/js/fastclick.js') }}"></script>
    
    <!-- IE8 -->
    <!--[if lt IE 9]>

    <script src="{{ url('/assets/ie8/js/html5shiv.min.js') }}"></script>

    <script src="{{ url('/assets/ie8/js/respond.min.js') }}"></script>

    <![endif]-->

 @show

</body>
</html>