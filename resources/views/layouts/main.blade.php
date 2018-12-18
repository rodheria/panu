<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

    <title>{{ config('app.name', 'Panu') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> --}}

    {{-- IONICONS --}}
    <link href="https://unpkg.com/ionicons@4.4.2/dist/css/ionicons.min.css" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.4.8/dist/ionicons.js"></script>
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-panu bottom-shadow">
      <div class="container">
        <a class="navbar-brand font-weight-bold" href="{{route('home')}}"><img class="" width="18" src="{{asset('images/logos/paw-white.png')}}" alt=""> PANU</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse ml-5" id="navbarResponsive">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ Request::is('home') ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('home')}}">Inicio</a>
                </li>
                <li class="nav-item {{ Request::is('posts') ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('posts')}}">Posts</a>
                </li>
                <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('about')}}">Quienes somos</a>
                </li>
                <li class="nav-item {{ Request::is('faq') ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('faq')}}">F.A.Q.</a>
                </li>
                <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('contact') }}">Contacto</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                @if(Auth::check())
                    <li class="nav-item {{ Request::is('register') ? 'active' : '' }}">
                        <span class="nav-link text-light">Sesion iniciada como: <a class="font-weight-bold text-white" href="#PERFIL">{{Auth::user()->name}}</a></span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{route('logout')}}">Cerrar sesión</a>
                    </li>
                @else
                    <li class="nav-item {{ Request::is('login') ? 'active' : '' }}">
                        <a class="nav-link font-weight-bold" href="{{route('login')}}">Iniciar sesión</a>
                    </li>
                    <li class="nav-item {{ Request::is('register') ? 'active' : '' }}">
                        <a class="nav-link font-weight-bold" href="{{route('register')}}">Registrarse</a>
                    </li>
                @endif
            </ul>
        </div>
      </div>
    </nav>

    @yield('content')

    {{-- <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer> --}}

    <footer class="footer pt-4 mt-4 bg-dark col-xs-12">
        <div class="container">
            <div class="row">
                <ul class="list-unstyled col-6 col-xs-12">
                    <li><a href="{{route('home')}}" class="text-light"><i class="icon ion-md-arrow-dropright-circle"></i> Inicio</i></a></li>
                    <li><a href="{{route('about')}}" class="text-light"><i class="icon ion-md-arrow-dropright-circle"></i> Quienes somos</a></li>
                    <li><a href="{{route('faq')}}" class="text-light"><i class="icon ion-md-arrow-dropright-circle"></i> F.A.Q.</a></li>
                    <li><a href="{{route('contact')}}" class="text-light"><i class="icon ion-md-arrow-dropright-circle"></i> Contacto</a></li>
                </ul>
                <ul class="list-unstyled text-right align-right col-6 col-xs-12">
                    <li><a href="mailto:info@panu.com.ar" class="text-light"><i class="icon ion-md-mail"></i> info@panu.com.ar</a></li>
                    <li><a href="tel:+541147434734" class="text-light"><i class="icon ion-md-call"></i> +54 11 4743-4734</a></li>
                    <li><a href="https://vignette.wikia.nocookie.net/simpsons/images/6/65/800px-742_Evergreen_Terrace.png/revision/latest?cb=20170101225756" class="text-light"><i class="icon ion-md-pin"></i> Av. Siempreviva 742,<br>Springfield</a></li>
                </ul>
            </div>
            <div class="row">
                <ul class="list-unstyled col-xs-12 text-light mx-auto align-bottom">
                    <li class="">Copyright © Todos los Derechos Reservados</li>
                </ul>
                
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    {{-- <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
    <script src="/js/master.js"></script>
  </body>

</html>
