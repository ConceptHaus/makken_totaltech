<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <title>Total Tech</title>
    <meta name="description" content="DESCRIPTION">
    <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Estilos -->
   <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

 <body>

<!-- Inicio de Menú -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
<a class="navbar-brand" href="index.html"> <img class="logo-menu" src="{{ asset('img/logos/puedescontodo-logo.svg') }}"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="index.html">DINÁMICA</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#ganadores">GANADORES</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">PARTICIPA</a>
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
  <div class="container pt-4 pb-4">
    <div class="row align-items-center">
      <div class="col-lg-2">
        SOPORTE
55-555-5555
info@correo.com
      </div>
      <div class="col-lg-2">
        LEGALES
Aviso de Privacidad
Términos y Condiciones
      </div>
      <div class="col-lg-6 text-center">
        WWW.MUNDOCEYS.COM
      </div>
      <div class="col-lg-2">
        <img class="img-fluid"src="{{ asset('img/logos/ceys-logo.svg') }}" alt="Ceys">
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
