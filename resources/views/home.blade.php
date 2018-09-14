@extends('layouts.app')

@section('content')
  <!-- Header -->
  <section class="header-home">
    <img class="img-pleca" src="{{ asset('img/elements/pleca.svg') }}" alt="Pleca Total Tech">
    <img class="img-silicon" src="{{ asset('img/images/product.png') }}" alt="Silicón">
    <img class="img-logo-ceys" src="{{ asset('img/logos/ceys-logo.svg') }}" alt="Ceys total Tech">
    <div class="texto-home col-6">
      <h1>¡BIENVENIDO</h1>
      <h3 class="blanco">NOMBRE DE USUARIO!</h3>
    </div>
  </section>
  <!-- Fin de Header -->

@endsection
