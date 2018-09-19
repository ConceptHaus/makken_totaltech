<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Admin / Total Tech</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon.png') }}"/>
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
    <!-- PLUGINS STYLES-->
    <link href="{{ asset('admin/vendors/dataTables/datatables.min.css') }}" rel="stylesheet" />
    <!-- Estilos -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- PAGE LEVEL STYLES-->
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- START HEADER-->
        <header class="header">
            <div class="page-brand text-center">
                <a href="{{ url('/admin/usuarios/registrados') }}">
                    <span class="brand">
                        <img src="{{ asset('admin/img/logos/ceys-logo.svg') }}">
                    </span>
                    <span class="brand-mini">
                        <img src="{{ asset('admin/img/logos/ceys-logomini.png') }}">
                    </span>
                </a>
            </div>
            <div class="flexbox flex-1">
                <!-- START TOP-LEFT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li>
                        <a class="nav-link sidebar-toggler js-sidebar-toggler" href="javascript:;">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                    </li>
                </ul>
                <!-- END TOP-LEFT TOOLBAR-->
                <!-- START TOP-RIGHT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li class="dropdown dropdown-user">
                        <a class="dropdown-toggle">
                            <span>Administrador</span>
                            <i class="la la-user"></i>
                        </a>
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
                    @if (Request::path() == 'admin/usuarios/registrados' || Request::path() == 'admin/usuarios/ganadores')
                        <li class="active">
                    @else
                        <li>
                    @endif
                        <a href="javascript:;">
                            <!-- <i class="sidebar-item-icon ti-user"></i> -->
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
                    <li>
                        <a href="">
                            <i class="sidebar-item-icon la la-file-text-o" style="font-size: 23px;"></i>
                            <span class="nav-label">TEXTOS</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- END SIDEBAR-->

        <!-- CONTENT-->
        @yield('content')
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
        <!-- PAGE LEVEL PLUGINS-->
        <script src="{{ asset('admin/vendors/dataTables/datatables.min.js') }}"></script>
        <!-- CORE SCRIPTS-->
        <script src="{{ asset('admin/js/app.min.js') }}"></script>
        <!-- PAGE LEVEL SCRIPTS-->
        <script>
            $(function() {
                $('#orders-table').DataTable({
                    pageLength: 10,
                    fixedHeader: true,
                    responsive: true,
                    "sDom": 'rtip',
                    "language":{
                        "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                    },
                    columnDefs: [{
                        targets: 'no-sort',
                        orderable: false
                    }]  
                });

                var table = $('#orders-table').DataTable();
                $('#key-search').on('keyup', function() {
                    table.search(this.value).draw();
                });
                $('#type-filter').on('change', function() {
                    table.column(4).search($(this).val()).draw();
                });
            });
        </script>

    </body>
</html>
