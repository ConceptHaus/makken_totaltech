<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <meta name="description" content=""/>
    <meta name="og:image" content="{{asset('img/logos/meta-totaltech.png')}}"/>
     <!-- Facebook -->
     <meta property="og:title" content="¡Compra y gana una bicicleta con TotalTech!"/>
     <meta property="og:image" content="{{asset('img/logos/meta-totaltech.png')}}" />
     <meta property="og:description" content="¡Compra y gana una bicicleta con TotalTech!"/>   
     <meta property="og:type" content="website" />
     <meta property="og:url" content="https://www.mundoceys.com" /> 
     <!--<meta property="og:site_name" content="" />-->
    <title>Admin / Total Tech</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon.png') }}" />
    <meta name="description" content="DESCRIPTION">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- GLOBAL MAINLY STYLES-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/line-awesome/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/themify-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/animate.css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('admin/vendors/smalot-bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('admin/vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css') }}">
    <!-- PLUGINS STYLES-->
    <link href="{{ asset('admin/vendors/dataTables/datatables.min.css') }}" rel="stylesheet" />
    <!-- Estilos -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- PAGE LEVEL STYLES-->
</head>

<body class="fixed-navbar" ng-app="angularApp">
    <div class="page-wrapper">
        <!-- START HEADER-->
        <header class="header">
            <div class="page-brand text-center">
                <a href="{{ url('/admin/dashboard') }}">
                    <span class="brand">
                        <img src="{{ asset('admin/img/logos/ceys-logo.svg') }}">
                    </span>
                    <span class="brand-mini">
                        <img src="{{ asset('admin/img/logos/ceys-logomini.png') }}">
                    </span>
                </a>
            </div>
            <div class="flexbox flex-1">
                <!-- START TOP-RIGHT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li class="dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle link" data-toggle="dropdown" aria-expanded="false">
                            <span>Administrador</span>
                            <i class="la la-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-arrow dropdown-menu-right admin-dropdown-menu"
                            x-placement="bottom-end"
                            style="position: absolute; transform: translate3d(-300px, 66px, 0px); top: 0px; left: 0px; will-change: transform;">
                            <div class="dropdown-arrow"></div>
                            <div class="admin-menu-content">
                                <div class="d-flex justify-content-between mt-2">
                                    <a class="d-flex align-items-center" href="{{ url('/logout') }}">Cerrar Sesión <i
                                            class="ti-shift-right ml-2 font-20"></i></a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- END TOP-RIGHT TOOLBAR-->
            </div>
        </header>
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <ul class="side-menu metismenu">
                    @if (Request::path() == 'admin/dashboard')
                    <li class="active">
                        @else
                    <li>
                        @endif
                    <li>
                        <a href="{{ url('/admin/dashboard') }}">
                            <i class="sidebar-item-icon ti-layout"></i>
                            <span class="nav-label">DASHBOARD</span>
                        </a>
                    </li>

                    @if (Request::path() == 'admin/usuarios/registrados' || Request::path() ==
                    'admin/usuarios/ganadores')
                    <li class="active">
                        @else
                    <li>
                        @endif
                        <a href="javascript:;">
                            
                            <i class="sidebar-item-icon la la-user"></i>
                            <span class="nav-label">USUARIOS</span><i class="fa fa-angle-left arrow"></i>
                        </a>
                        <ul class="nav-2-level collapse">
                            <li>
                                @if (Request::path() == 'admin/usuarios/registrados')
                                <a class="active" href="{{ url('/admin/usuarios/registrados') }}">Registrados</a>
                                @else
                                <a href="{{ url('/admin/usuarios/registrados') }}">Registrados</a>
                                @endif
                            </li>
                            <li>
                                @if (Request::path() == 'admin/usuarios/ganadores')
                                <a class="active" href="{{ url('/admin/usuarios/ganadores') }}">Ganadores</a>
                                @else
                                <a href="{{ url('/admin/usuarios/ganadores') }}">Ganadores</a>
                                @endif
                            </li>
                        </ul>
                    </li>
                    @if (Request::path() == 'admin/tickets/nuevo' || Request::path() == 'admin/tickets/registrados')
                    <li class="active">
                        @else
                    <li>
                        @endif
                        <a href="javascript:;">
                            <i class="sidebar-item-icon ti-ticket"></i>
                            <span class="nav-label">TICKETS</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                @if (Request::path() == 'admin/tickets/nuevo')
                                <a class="active" href="{{ url('/admin/tickets/nuevo') }}">Agregar Ticket</a>
                                @else
                                <a href="{{ url('/admin/tickets/nuevo') }}">Agregar Ticket</a>
                                @endif
                            </li>
                            <li>
                                @if (Request::path() == 'admin/tickets/registrados')
                                <a class="active" href="{{ url('/admin/tickets/registrados') }}">Registrados</a>
                                @else
                                <a href="{{ url('/admin/tickets/registrados') }}">Registrados</a>
                                @endif
                            </li>
                        </ul>
                    </li>
                    @if (Request::path() == 'admin/establecimientos')
                    <li class="active">
                        @else
                    <li>
                        @endif
                    <li>
                        <a href="{{ url('/admin/establecimientos') }}">
                            <i class="sidebar-item-icon ti-shopping-cart"></i>
                            <span class="nav-label">ESTABLECIMIENTOS</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- END SIDEBAR-->

        <!-- CONTENT-->
        <div class="content-wrapper h-100-vh" ng-controller="adminCtrl">
            @yield('content')
        </div>
        <!-- END CONTENT-->

        <!-- BEGIN PAGA BACKDROPS-->
        <div class="sidenav-backdrop backdrop"></div>
        <div class="preloader-backdrop">
            <div class="page-preloader">Cargando</div>
        </div>
        <!-- END PAGA BACKDROPS-->
        <!-- CORE PLUGINS-->
        <script src="{{ asset('admin/vendors/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('admin/vendors/popper.js/dist/umd/popper.min.js') }}"></script>
        <script src="{{ asset('admin/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('admin/vendors/metisMenu/dist/metisMenu.min.js') }}"></script>
        <script src="{{ asset('admin/vendors/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('admin/vendors/jquery-idletimer/dist/idle-timer.min.js') }}"></script>
        <script src="{{ asset('admin/vendors/toastr/toastr.min.js') }}"></script>
        <script src="{{ asset('admin/vendors/jquery-validation/dist/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('admin/vendors/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
        <script src="{{ asset('admin/vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
        <!-- CORE SCRIPTS-->
        <script src="{{ asset('admin/js/app.min.js') }}"></script>
        <!-- PAGE LEVEL PLUGINS-->
        <script src="{{ asset('admin/vendors/dataTables/datatables.min.js') }}"></script>
        <!-- PAGE LEVEL SCRIPTS-->
        <script>
            $(function () {
                $('.selectpicker').selectpicker();
                $('#orders-table').DataTable({
                    pageLength: 10,
                    fixedHeader: true,
                    responsive: true,
                    "sDom": 'rtip',
                    "language": {
                        "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                    },
                    columnDefs: [{
                        targets: 'no-sort',
                        orderable: false
                    }]
                });

                var table = $('#orders-table').DataTable();
                $('#key-search').on('keyup', function () {
                    table.search(this.value).draw();
                });
                $('#type-filter').on('change', function () {
                    table.column(4).search($(this).val()).draw();
                });

                $('#date_1 .input-group.date').datepicker({
                    todayBtn: "linked",
                    keyboardNavigation: false,
                    forceParse: false,
                    calendarWeeks: true,
                    autoclose: true,
                    format: 'dd-mm-yyyy'
                });
                //Settings para chart de Dashboard
                $('.easypie').each(function () {
                    $(this).easyPieChart({
                        //trackColor: $(this).attr('data-trackColor') || '#f2f2f2',
                        scaleColor: false,
                        barColor: '#223F97',
                    });
                });
            });
        </script>
        <!-- ANGULAR --->
        <!-- Cambio de Menu con Scrolll -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.11/lodash.core.min.js"></script>
        <script src="{{ mix('js/vendor.js') }}"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/danialfarid-angular-file-upload/12.2.13/ng-file-upload.min.js">
        </script>
        <script src="{{ mix('js/admin.controllers.js') }}"></script>
        <script src="{{ mix('js/admin.services.js') }}"></script>

        {{-- <script src="{{ asset('js/angular-locale_es-es.min.js') }}"></script> --}}

        {{-- <link rel="stylesheet"; href="https://unpkg.com/ng-table@2.0.2/bundles/ng-table.min.css"> --}}
        <script src="https://unpkg.com/ng-table@2.0.2/bundles/ng-table.min.js"></script>
        <script src="{{ asset('js/moment.min.js') }}"></script>
        <script src="{{ asset('js/angular-moment.min.js') }}"></script>
        <script src="{{ asset('js/es.js') }}"></script>
        <script src="{{ asset('admin/vendors/smalot-bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}">
        </script>
        <script src="{{asset('js/nav.js')}}"></script>
        <!-- End Scripts -->
        <script>
            var app = angular.module('angularApp', ['adminController', 'AdminFactory', 'ngFileUpload', 'ngTable',
                'angularMoment', 'ngMask'
            ]);
            app.config(function ($interpolateProvider) {
                $interpolateProvider.startSymbol('<%');
                $interpolateProvider.endSymbol('%>');
            })
            app.constant("CSRF_TOKEN", '{{csrf_token()}}');
        </script>

        <script src="{{asset('admin/vendors/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js')}}"></script>
        <script src="{{asset('admin/vendors/chart.js/dist/Chart.min.js')}}"></script>

</body>

</html>