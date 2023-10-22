<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="¡Compra y Gana con Ceys!" />
  <meta name="og:image" content="{{asset('img/logos/meta-index.jpg')}}" />
  <!-- Facebook -->
  <meta property="og:title" content="Gana con Ceys" />
  <meta property="og:description" content="¡Compra y Gana con Ceys!" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://ganaconceys.com.mx" />

  <title>Gana con Ceys</title>
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon.png') }}" />
  <meta name="description" content="¡Compra y Gana con Ceys!">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Estilos -->
  <link rel="stylesheet" href="{{ asset('css/index.css?1') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css?7') }}">
  <link rel="stylesheet" href="{{ asset('css/animate.min.css?3') }}">
  <!-- Iconos Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/solid.css"
    integrity="sha384-VGP9aw4WtGH/uPAOseYxZ+Vz/vaTb1ehm1bwx92Fm8dTrE+3boLfF1SpAtB1z7HW" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-CZ64ST5FG6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-CZ64ST5FG6');
</script>



</head>
@if (Request::path() == '/')

<body ng-app="angularApp">
  @else

  <body ng-app="angularApp" class="body-bg">
   
    @endif
    <!-- Inicio de Menú -->
    <!-- Fin del Menú -->
    @yield('content')
 
    <!-- Scripts de Javi -->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/scrollMenu.js') }}"></script>
    <script src="{{ asset('js/nav.js') }}"></script>
    <script src="{{ asset('js/indexmenu.js') }}"></script>
    <script>
      new WOW({
        resetAnimation: false,
      }).init();
    </script>

  
  

  </body>

</html>