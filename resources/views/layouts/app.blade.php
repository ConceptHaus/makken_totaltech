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
  <!-- Iconos Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/solid.css" integrity="sha384-VGP9aw4WtGH/uPAOseYxZ+Vz/vaTb1ehm1bwx92Fm8dTrE+3boLfF1SpAtB1z7HW" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

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
            41-600-800/900
            <a class="mail-footer" href="mailto:privacidad@makken.com.mx" target="_blank">privacidad@makken.com.mx</a></p>
          </div>
          <div class="col-lg-2 text-responsive">
            <p class="no-margin"><strong>LEGALES</strong><br></p>
            <p class="no-margin"><a href="#" data-toggle="modal" data-target="#AvisoModal" data-scroll-ignore>Aviso de Privacidad</a></p>
            <!-- Aviso de Privacidad Modal -->
                <div class="modal fade" id="AvisoModal" tabindex="-1" role="dialog" aria-labelledby="AvisoModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title azul-dos normal" id="AvisoModalLabel">AVISO DE PRIVACIDAD</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        En cumplimiento a lo dispuesto en la Ley Federal de Protección de Datos Personales en Posesión de los Particulares, MMS COMUNICACIONES S.A. DE C.V. (MAKKEN), ubicado en Emilio Castelar No. 171 2º piso, Col. Chapultepec Polanco, Miguel Hidalgo, México D.F. CP. 11560. Le informa que los datos obtenidos en virtud de la contratación de productos o servicios con MAKKEN (los “Datos”) serán tratados de manera confidencial a través de los sistemas provistos para tales efectos y serán usados para los productos que hubiese contratado con la seguridad que sus datos personales estarán protegidos. La seguridad de su información personal es nuestra prioridad, por lo que en cualquier momento usted tiene el derecho de acceder, rectificar, limitar o cancelar el tratamiento de sus datos  comunicándose con nosotros vía correo electrónico: <a class="modal-link" href="mailto:privacidad@makken.com.mx">privacidad@makken.com.mx</a>. Cualquier modificación al presente aviso le será notificada a través de nuestra página web:<a class="modal-link" href="www.makken.com.mx" target="_blank">www.makken.com.mx</a>.Por éste medio usted autoriza a MAKKEN a transferir los datos con sus accionistas, empresas subsidiarias, afiliadas, o a cualquier tercero, cuando dicha transferencia sea necesaria por virtud de un acuerdo alcanzado por parte de MAKKEN en interés de usted. Para cualquier otra autorización adicional no contenida en el presente, MAKKEN deberá solicitar su autorización expresa. Por último, usted autoriza expresamente a MAKKEN para utilizar la información del cliente con fines mercadotécnicos o publicitarios, así como para recibir publicidad de cualquier índole o para ofrecerle otros productos. No obstante lo anterior, usted podrá revocar dicho consentimiento, de manera escrita, y solicitar su inscripción el Registro Público de Consumidores, con la finalidad de que su información no sea utilizada con fines mercadotécnicos o publicitarios.
                      </div>
                    </div>
                  </div>
                </div>
            <p class="no-margin">Términos y Condiciones</p>
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
  <script src="{{ mix('js/forgotPassword.controllers.js') }}"></script>
  <script src="{{ mix('js/forgotPassword.services.js') }}"></script>

  <!-- End Scripts -->
  <script>
    var app = angular.module('angularApp',['userController','userFactory','forgotPasswordController', 'forgotFactory','ngFileUpload']);
    app.config(function($interpolateProvider){
      $interpolateProvider.startSymbol('<%');
      $interpolateProvider.endSymbol('%>');
    })
    app.constant("CSRF_TOKEN",'{{csrf_token()}}');
  </script>
</body>

</html>
