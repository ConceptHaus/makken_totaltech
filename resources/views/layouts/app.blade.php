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
  <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
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
        <li class="nav-item">
        <a id="menu-link" class="nav-link" data-scroll href="{{ url('/#dinamica')}}">DINÁMICA</a>
        </li>
        <li class="nav-item">
          <a id="menus-link" class="nav-link" data-scroll href="{{ url('/#ganadores')}}">GANADORES</a>
        </li>
        <li class="nav-item">
          @if (Auth::check())
            {{-- <a id="menu-link" class="nav-link" data-scroll href="{{ url('/login')}}">PARTICIPA LOGIN</a> --}}
            <div class="dropdown nav-link">
                <a class="dropdown-toggle" data-toggle="dropdown">MI CUENTA</a>
                <div class="dropdown-menu shadow-menu">
                  <a id="menu-link" class="dropdown-item nav-link" href="{{ url('/ticket') }}">Agregar Ticket</a>
                  <a id="menu-link" class="dropdown-item nav-link" href="{{ url('/home') }}">Mi Cuenta</a>
                  <a id="menu-link" class="dropdown-item nav-link" href="{{ url('/logout') }}">Cerrar Sesión</a>
                </div>
            </div>
          @else
            <a id="menu-link" class="nav-link" data-scroll href="{{ url('/login')}}">PARTICIPA</a>
          @endif
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

  <!-- Scripts de Javi -->
  <script src="{{ asset('js/wow.min.js') }}"></script>
  <script src="{{ asset('js/smooth-scroll.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="{{ asset('js/scrollMenu.js') }}"></script>
  <script>
	 var scroll = new SmoothScroll('a[href*="#"]', {
      speed: 2500,
	    clip: false,
      ignore: '[data-scroll-ignore]',
   });
  </script>
  <script>
    new WOW({
      resetAnimation: false,
    }).init();
  </script>


  <!-- Scripts -->
   <!-- Cambio de Menu con Scrolll -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2"></script>
  <script src="{{ mix('js/vendor.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/danialfarid-angular-file-upload/12.2.13/ng-file-upload.min.js"></script>
  <script src="{{ mix('js/user.controllers.js') }}"></script>
  <script src="{{ mix('js/user.services.js') }}"></script>
  <script src="{{ mix('js/admin.controllers.js') }}"></script>
  <script src="{{ mix('js/admin.services.js') }}"></script>
  <script src="{{ mix('js/home.controllers.js') }}"></script>
  <script src="{{ mix('js/home.services.js') }}"></script>

  <!-- End Scripts -->
  <script>
    var app = angular.module('angularApp',['userController','userFactory','ngFileUpload']);
    app.config(function($interpolateProvider){
      $interpolateProvider.startSymbol('<%');
      $interpolateProvider.endSymbol('%>');
    })
    app.constant("CSRF_TOKEN",'{{csrf_token()}}');
  </script>
</body>

</html>
