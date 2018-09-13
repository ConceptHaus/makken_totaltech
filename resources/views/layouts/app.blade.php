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
     <!-- Bootstrap -->
   <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.min.css') }}">
   <link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.min.css') }}">
   <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
   <!-- Latest compiled and minified CSS -->
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> --}}
   {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> --}}
   <!-- Fin de estilos -->


    <!--[if lt IE 9]>
      <script src = "http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

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
   <!-- Bootstrap -->
  <script src="{{ asset('js/bootstrap.bundle.js')}}"></script>
  <script src="{{ asset('js/bootstrap.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> --}}
  {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> --}}
 <!-- Fin de Scripts -->
</body>

</html>
