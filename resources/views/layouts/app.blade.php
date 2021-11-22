<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="¡Compra y gana un scooter con Montack!" />
  <meta name="og:image" content="{{asset('img/logos/meta-totaltech.jpg')}}" />
  <!-- Facebook -->
  <meta property="og:title" content="Gana con Ceys" />
  <meta property="og:image" content="https://ganaconceys.com.mx/img/logos/meta-totaltech.jpg" />
  <meta property="og:description" content="¡Compra y gana una GoPro con Total Tech!" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://ganaconceys.com.mx" />

  <title>Gana con Ceys</title>
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon.png') }}" />
  <meta name="description" content="¡Compra y gana un scooter con Montack!">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Estilos -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
  <!-- Iconos Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/solid.css"
    integrity="sha384-VGP9aw4WtGH/uPAOseYxZ+Vz/vaTb1ehm1bwx92Fm8dTrE+3boLfF1SpAtB1z7HW" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <!-- Google Tag Manager -->
  <script>
    (function (w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-WC7P933');
  </script>
  <!-- End Google Tag Manager -->

<!-- Adform Tracking Code BEGIN -->

<script type="text/javascript">

    window._adftrack = Array.isArray(window._adftrack) ? window._adftrack : (window._adftrack ? [window._adftrack] : []);

    window._adftrack.push({

        HttpHost: 'track.adform.net',

        pm: 2316305,

        divider: encodeURIComponent('|'),

        pagename: encodeURIComponent('CEYS | RTG-MX-HOMEDEPOT')

    });

    (function () { var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = 'https://s2.adform.net/banners/scripts/st/trackpoint-async.js'; var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x); })();



</script>

<noscript>

    <p style="margin:0;padding:0;border:0;">

        <img src="https://track.adform.net/Serving/TrackPoint/?pm=2316305&ADFPageName=CEYS%20%7C%20RTG-MX-HOMEDEPOT&ADFdivider=|" width="1" height="1" alt="" />

    </p>

</noscript>

<!-- Adform Tracking Code END -->


</head>
@if (Request::path() == '/')

<body ng-app="angularApp">
  @else

  <body ng-app="angularApp" class="body-bg">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WC7P933" height="0" width="0"
        style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    @endif
    <!-- Inicio de Menú -->
    <nav id="menu1" class="navbar navbar-home navbar-expand-lg navbar-dark">
      {{-- @if (Request::path() !== '/')
      <a class="navbar-brand navbar-resp" href="{{ url('/') }}">
      @else
      <a class="navbar-brand navbar-brand-home" href="{{ url('/') }}">
        @endif
        <img class="logo-menu" id="logo-img-resp" src="{{ asset('img/logos/consigue-tu-bicicleta.png') }}">
      </a> --}}
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-start" id="navbarNav">
        <ul class="navbar-nav">
          <li id="dinamica-link" class="nav-item">
            <a id="menu-link" class="nav-link " data-scroll href="{{ url('/#dinamica')}}">DINÁMICA</a>
          </li>
          <li id="ganadores-link" class="nav-item">
            <a id="menus-link" class="nav-link" data-scroll href="{{ url('/#ganadores')}}">GANADORES</a>
          </li>
          @if (Request::path() == 'login')
          <li class="nav-item active">
            @else
          <li class="nav-item ">
            @endif
            @if (Auth::check())
            <div class="dropdown nav-link">
              <a class="dropdown-toggle " data-toggle="dropdown">MI CUENTA</a>
              <div class="dropdown-menu shadow-menu">
                <a id="menu-link" class="dropdown-item nav-link " href="{{ url('/ticket') }}">Agregar Ticket</a>
                <a id="menu-link" class="dropdown-item nav-link " href="{{ url('/home') }}">Mi Cuenta</a>
                <a id="menu-link" class="dropdown-item nav-link " href="{{ url('/logout') }}">Cerrar Sesión</a>
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

    {{-- Botónes en móvil --}}
    <div class="BotonesFooter">
      @if(Request::path() == '/')
      @if(Auth::check())
      <a class="BotonesFooter__boton" href="{{ url('/ticket') }}">¡PARTICIPA! <span class="BotonesFooter__span">DA CLICK
          AQUÍ</span></a>
      @else
      <a class="BotonesFooter__boton" href="{{ url('/login') }}">¡PARTICIPA! <span class="BotonesFooter__span">DA CLICK
          AQUÍ</span></a>
      @endif
      @endif
    </div>

    <!-- Footer -->
    @if (Request::path() == '/'|| Request::path() === 'ticket' || Request::path() === 'login'|| Request::path() ===
    'home')
    <footer>
      <div class="container-fluid pt-4 pb-4 pl-5 pr-5">
        <div class="row align-items-center mx-0 text-center">
          <div class="col-lg-3 text-responsive pl-md-4 ml-lg-5 pl-lg-2">
            <p class="no-margin">
              <strong>SOPORTE</strong><br>
              41-600-800/900<br>
              <a class="mail-footer" href="mailto:privacidad@makken.com.mx" target="_blank">Promociones@makken.com.mx</a>
            </p>
          </div>
          <div class="col-lg-3 text-responsive">
            <p class="no-margin">
              <strong>LEGALES</strong><br>
            </p>
            <p class="no-margin"><a href="/avisos/Gana_Con_Ceys_Aviso_de_Privacidad.pdf" target="_blank"
                data-scroll-ignore>Aviso de Privacidad</a></p>
            <p class="no-margin"><a href="/avisos/Gana_Con_Ceys_Terminos_y_Condiciones.pdf" target="_blank"
                data-scroll-ignore>Términos y Condiciones</a></p>
          </div>
          <div class="col-lg-2 text-center">
            <p>
              <a href="https://mundoceys.com/" target="_blank" class="mundo-link">
                <strong>WWW.MUNDOCEYS.COM</strong>
              </a>
            </p>
          </div>
          <div class="col-lg-3 text-lg-right text-center">
            <a href="https://mundoceys.com/" target="_blank">
              <img class="img-footer" src="{{ asset('img/logos/ceys-logo.svg') }}" alt="Ceys">
            </a>
          </div>
        </div>
      </div>
    </footer>
    @endif
    <!-- Fin Footer -->
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
    <script>
      new WOW({
        resetAnimation: false,
      }).init();
    </script>
    <!-- Scripts -->

    <!-- Cambio de Menu con Scrolll -->
    <script src="{{asset('bower/sweetalert2/dist/sweetalert2.all.min.js')}}"></script>
    <script src="{{ mix('js/vendor.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/danialfarid-angular-file-upload/12.2.13/ng-file-upload.min.js">
    </script>
    <script src="{{ mix('js/user.controllers.js') }}"></script>
    <script src="{{ mix('js/user.services.js') }}"></script>
    <script src="{{ mix('js/admin.controllers.js') }}"></script>
    <script src="{{ mix('js/admin.services.js') }}"></script>
    <script src="{{ mix('js/home.controllers.js') }}"></script>
    <script src="{{ mix('js/home.services.js') }}"></script>
    <script src="{{ mix('js/forgotPassword.controllers.js') }}"></script>
    <script src="{{ mix('js/forgotPassword.services.js') }}"></script>
    <!-- End Scripts -->
    <script>
      var app = angular.module('angularApp', ['userController', 'userFactory', 'forgotPasswordController',
        'forgotFactory', 'ngFileUpload', 'ngMask'
      ]);
      app.config(function ($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
      })
      app.constant("CSRF_TOKEN", '{{csrf_token()}}');
    </script>

    <!-- Google Tag Manager (noscript) -->
    <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PK4GNK7" height="0" width="0"
        style="display:none;visibility:hidden">
      </iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

  </body>

</html>