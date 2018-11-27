<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Panu') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-panu bottom-shadow">
      <div class="container">
        <a class="navbar-brand font-weight-bold" href="{{route('home')}}">PANU</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('home')}}">Inicio
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('about')}}">Quienes somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">F.A.Q.</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contacto</a>
            </li>
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

    <footer class="footer py-5 bg-dark">
        <div class="container">
            <div class="row">
                <ul class="footerNav col-auto list-unstyled col-xs-12">
                    <li><a href="index.php" class="text-light"><i class="icon ion-md-arrow-dropright-circle"></i> Inicio</i></a></li>
                    <li><a href="login.php" class="text-light"><i class="icon ion-md-arrow-dropright-circle"></i> Iniciar sesión</a></li>
                    <li><a href="registro.php" class="text-light"><i class="icon ion-md-arrow-dropright-circle"></i> Registrarse</a></li>
                    <li><a href="faq.php" class="text-light"><i class="icon ion-md-arrow-dropright-circle"></i> F.A.Q</a></li>
                </ul>
                <span class="col text-light text-center align-bottom col-xs-12">Copyright © Todos los Derechos Reservados</span>
                <ul class="footerInfo col-auto list-unstyled text-right col-xs-12">
                    <li><a href="mailto:info@panu.com.ar" class="text-light"><i class="icon ion-md-mail"></i> info@panu.com.ar</a></li>
                    <li><a href="tel:+541147434734" class="text-light"><i class="icon ion-md-call"></i> +54 11 4743-4734</a></li>
                    <li><a href="https://vignette.wikia.nocookie.net/simpsons/images/6/65/800px-742_Evergreen_Terrace.png/revision/latest?cb=20170101225756" class="text-light"><i class="icon ion-md-pin"></i> Av. Siempreviva 742,<br>Springfield</a></li>
                </ul>
                
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    {{-- <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> --}}

  </body>

</html>
