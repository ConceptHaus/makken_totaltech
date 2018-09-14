<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <title>Total Tech</title>
    <meta name="description" content="DESCRIPTION">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon.png') }}"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Estilos -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="body-bg">

    <!-- Inicio de Menú -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <a class="navbar-brand" href="{{ url('/') }}"> <img class="logo-menu" src="{{ asset('img/logos/puedescontodo-logo.svg') }}"></a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
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

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>