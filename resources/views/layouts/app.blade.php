<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="UTF-8">
  <title>Total Tech</title>
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon.png') }}"/>
  <meta name="description" content="DESCRIPTION">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Estilos -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>

  <!-- Inicio de Menú -->
  <nav class="navbar navbar-home navbar-expand-lg navbar-dark">  
    @if (Request::path() !== 'home')
      <a class="navbar-brand navbar-brand-home" href="{{ url('/') }}">
    @else
     <a class="navbar-brand" href="{{ url('/') }}">
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
          <a class="nav-link" href="{{ url('/#dinamica')}}">DINÁMICA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/#ganadores')}}">GANADORES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/login')}}">PARTICIPA</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Fin del Menú -->

  {{-- Content --}}

  @yield('content')

  {{-- End Content --}}

  <!-- Footer -->
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
  <!-- Fin Footer -->

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
  <!-- End Scripts -->
</body>

</html>
