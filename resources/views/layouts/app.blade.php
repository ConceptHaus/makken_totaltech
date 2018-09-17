<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Total Tech</title>
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon.png') }}"/>
  <meta name="description" content="DESCRIPTION">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Estilos -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
<<<<<<< HEAD
  <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
=======
  <link rel="stylesheet" href="{{ mix('css/all.css')}}">
>>>>>>> dcd0d3e826d66ceb164265ddf18cd056f6cb6514
</head>

@if (Request::path() == '/')
  <body ng-app="angularApp">
@else
  <body ng-app="angularApp" class="body-bg">
@endif
  <!-- Inicio de Menú -->
  <nav id="menu1" class="navbar navbar-home navbar-expand-lg navbar-dark">
    @if (Request::path() !== '/')
      <a class="navbar-brand" href="{{ url('/') }}">
    @else
      <a class="navbar-brand navbar-brand-home" href="{{ url('/') }}">
    @endif
      <img class="logo-menu" src="{{ asset('img/logos/puedescontodo-logo.svg') }}">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
        <a class="nav-link" data-scroll href="{{ url('/#dinamica')}}">DINÁMICA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-scroll href="{{ url('/#ganadores')}}">GANADORES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-scroll href="{{ url('/login')}}">PARTICIPA</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Fin del Menú -->

  {{-- Content --}}

  @yield('content')

  {{-- End Content --}}

  <!-- Footer -->
  @if (Request::path() == '/' || Request::path() === 'home')
    <footer>
      <div class="container-fluid pt-4 pb-4 pl-5 pr-5">
        <div class="row align-items-center">
          <div class="col-lg-2 text-responsive">
            <p><strong>SOPORTE</strong><br>
            55-555-5555
            info@correo.com</p>
          </div>
          <div class="col-lg-2 text-responsive">
            <p><strong>LEGALES</strong><br>
            Aviso de Privacidad
            Términos y Condiciones</p>
          </div>
          <div class="col-lg-6 text-center">
            <p><a href="https://mundoceys.com/" target="_blank"><strong>WWW.MUNDOCEYS.COM</strong></a></p>
          </div>
          <div class="col-lg-2 text-center">
            <a href="https://mundoceys.com/" target="_blank"><img class="img-footer" src="{{ asset('img/logos/ceys-logo.svg') }}" alt="Ceys"></a>
          </div>
        </div>
      </div>
    </footer>
  @endif
  <!-- Fin Footer -->

<<<<<<< HEAD
  <!-- Scripts de Javi -->
  <script src="{{ asset('js/wow.min.js') }}"></script>
  <script src="{{ asset('js/smooth-scroll.js') }}"></script>
  <script>
	 var scroll = new SmoothScroll('a[href*="#"]', {
      speed: 2500,
	    clip: true,
   });
  </script>
  <script>
    new WOW({
      resetAnimation: false,
    }).init();
  </script>
=======


>>>>>>> dcd0d3e826d66ceb164265ddf18cd056f6cb6514


  <!-- Scripts -->
   <!-- Cambio de Menu con Scrolll -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2"></script>
  <script src="{{ mix('js/vendor.js') }}"></script>
  <script src="{{ mix('js/user.controllers.js') }}"></script>
  <script src="{{ mix('js/user.services.js') }}"></script>
  <script src="{{ mix('js/admin.controllers.js') }}"></script>
  <script src="{{ mix('js/admin.services.js') }}"></script>
  <script src="{{ mix('js/home.controllers.js') }}"></script>
  <script src="{{ mix('js/home.services.js') }}"></script>
 
  <!-- End Scripts -->
  <script>
    var app = angular.module('angularApp',['userController','userFactory']);
    app.config(function($interpolateProvider){
      $interpolateProvider.startSymbol('<%');
      $interpolateProvider.endSymbol('%>');
    })
    app.constant("CSRF_TOKEN",'{{csrf_token()}}');
  </script>
</body>

</html>
