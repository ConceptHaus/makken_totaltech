@extends('layouts.app')

@section('content')

<!-- Header -->
<p id="home" class="home" style="display:none;"></p>
<section class="header-home">
  <img class="img-pleca" src="{{ asset('img/elements/pleca3.svg') }}" alt="Pleca Total Tech">
  <img class="img-silicon wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5s" src="{{ asset('img/images/pega-sella-repara.png') }}" alt="Silicón">
  <img class="img-logo-ceys wow slideInUp" data-wow-duration="1s" data-wow-delay="0.5s" src="{{ asset('img/logos/ceys-logo.svg') }}" alt="Ceys total Tech">
  <div class="d-flex row container-button-participa">
    @if (Auth::check())
    <a href="{{ url('/ticket') }}" class="btn-call-to-action text-center wow slideInLeft btn" data-wow-duration="1s"
      data-wow-delay="0.5s">
      <span class="mx-4 px-3">PARTICIPA</span> REGISTRA TU TICKET AQUÍ
    </a>
    @else
    <a href="{{ url('/login') }}" class="btn-call-to-action text-center wow slideInLeft btn" data-wow-duration="1s"
      data-wow-delay="0.5s">
      <span class="mx-4 px-3">PARTICIPA</span> DA CLICK AQUÍ
    </a>
    @endif
  </div>
</section>

<!-- Dinámica del concurso -->
<div id="dinamica" class="container-fluid dinamica ">
  <div class="row text-center justify-content-center plecatop">
    <div class="col-lg-12 col-md-12 my-md-3 py-md-2 my-sm-3">
      <h1 class="my-md-0">DINÁMICA DEL CONCURSO</h1>
    </div>
  </div>
  <div class="row text-center justify-content-center pt-xl-3">
    <div class="row col-lg-8 justify-content-around">
      <div class="col-lg-3 col-sm-7 wow zoomIn" data-wow-offset="130" data-wow-duration="1s" data-wow-delay="0.5s">
        <img src="{{ asset('img/icons/step1.png') }}" class="pasos-img  pt-md-2" alt="Paso 1">
        <div class="text-center text-responsive my-md-3 py-md-3">
          <h5 class="no-margin responsive-title mt-md-2">COMPRA</h5>
          <h6 class="no-margin blanco responsive-title">CUALQUIER PRODUCTO TOTAL TECH® O DE LA MARCA CEYS.</h6>
        </div>
      </div>
      <div class="col-lg-3 col-sm-7 wow zoomIn" data-wow-offset="135" data-wow-duration="1s" data-wow-delay="0.5s">
        <img src="{{ asset('img/icons/step2.svg') }}" class="pasos-img-2" alt="Paso 2">
        <div class="text-center text-responsive my-md-3 py-md-3">
          <h5 class="no-margin responsive-title">REGISTRA</h5>
          <h6 class="no-margin blanco responsive-title">TU TICKET VÍA WHATSAPP AL (55) 80 68 10 49 O EN
            <a href="{{url('/')}}" class="link" target="_blank">TTPUEDECONTODO.COM</a></h6>
        </div>
      </div>
      <div class="col-lg-3 col-sm-7 wow zoomIn" data-wow-offset="135" data-wow-duration="1s" data-wow-delay="0.5s">
        <img src="{{ asset('img/icons/step3.png') }}" class="pasos-img bicicleta" alt="Paso 3">
        <div class="text-center text-responsive my-md-3 py-md-3">
          <h5 class="no-margin responsive-title">GANA</h5>
          <h6 class="no-margin blanco responsive-title responsive-title">UNA BICICLETA CADA DÍA.</h6>
        </div>

      </div>
    </div>
  </div>
  <div class="row text-center justify-content-center">
    <div class="col-lg-8 col-md-12 mt-5 mb-sm-5 pb-md-4">
      <h6 class="blanco mascompras">MIENTRAS MÁS COMPRAS, MÁS OPORTUNIDADES TIENES DE GANAR.</h6>
      <h4 class="recuerda">¡RECUERDA QUE TODAS LAS COMPRAS DE UN MISMO DÍA PARTICIPAN!</h4>
    </div>
  </div>
</div>
<!-- Fin Dinámica del concurso -->

<!-- Establecimientos Participantes -->
<div class="container pt-5 pb-5">
  <div class="row mx-0">
    <div class="row text-center col-lg-6 col-sm-12 mt-4 premio establecimientos mx-0">
      <div class="col-12">
        <h2 class="azul participantes">ESTABLECIMIENTOS PARTICIPANTES</h2>
      </div>
      <div class="col-6 my-md-4 py-md-3">
        <img class="tiendas-img wow fadeInDown my-3" data-wow-offset="130" data-wow-duration="1s" data-wow-delay="0.5s"
          src="{{ asset('img/logos/walmart.png') }}" alt="Walmart">
        <img class="tiendas-img wow fadeInDown my-3" data-wow-offset="130" data-wow-duration="1s" data-wow-delay="0.6s"
          src="{{ asset('img/logos/lacomer.png') }}" alt="La Comer">
        <img class="tiendas-img wow fadeInDown my-3" data-wow-offset="130" data-wow-duration="1s" data-wow-delay="0.7s"
          src="{{ asset('img/logos/heb.png') }}" alt="HEB">
        <img class="tiendas-img wow fadeInDown my-3" data-wow-offset="120" data-wow-duration="1s" data-wow-delay="0.8s"
          src="{{ asset('img/logos/homedepot.png') }}" alt="HomeDepot">
          <img class="tiendas-img wow fadeInDown my-3" data-wow-offset="120" data-wow-duration="1s" data-wow-delay="0.8s"
          src="{{ asset('img/logos/bodega-aurrera.png') }}" alt="Bodega">
      </div>
      <div class="col-6 my-md-4 py-md-3">
        <img class="tiendas-img wow fadeInDown my-3" data-wow-offset="130" data-wow-duration="1s" data-wow-delay="0.5s"
          src="{{ asset('img/logos/soriana.png') }}" alt="Soriana">
        <img class="tiendas-img wow fadeInDown my-3" data-wow-offset="130" data-wow-duration="1s" data-wow-delay="0.6s"
          src="{{ asset('img/logos/casacravioto.png') }}" alt="Casa Cravioto">
        <img class="tiendas-img wow fadeInDown my-3" data-wow-offset="130" data-wow-duration="1s" data-wow-delay="0.7s"
          src="{{ asset('img/logos/superama.png') }}" alt="Lowes">
        <img class="tiendas-img wow fadeInDown my-3" data-wow-offset="120" data-wow-duration="1s" data-wow-delay="0.8s"
          src="{{ asset('img/logos/chedraui.png') }}" alt="Chedrahui">
          <img class="tiendas-img wow fadeInDown my-3" data-wow-offset="120" data-wow-duration="1s" data-wow-delay="0.8s"
          src="{{ asset('img/logos/sodimac.png') }}" alt="Sodimac">
          
      </div>
      <div class="col-12 mt-3 my-md-4">
        <h5 class="azul">¡Y MUCHAS MÁS!</h5>
      </div>
    </div>
    <div class="row text-center col-lg-6 col-sm-12 mt-4 justify-content-center establecimientos mx-0 px-0">
      <div class="col-12">
        <h2 class="azul">PREMIO</h2>
      </div>
      <div class="col-lg-11 my-5">
        <img class="img-fluid wow zoomIn" data-wow-offset="130" data-wow-duration="1s" data-wow-delay="0.5s"
          src="{{ asset('img/images/bicycle.png') }}" alt="Premio Bicicleta">
        <h6 class="mt-3 gris">¡GANA UNA BICICLETA TODO TERRENO!</h6>
      </div>
      <div class="col-12 px-0">
        @if (Auth::check())
        <a href="{{ url('/ticket') }}" class="btn btn-call-to-action text-center ">
          <span class="mx-4 px-3">REGISTRA</span> TU TICKET
        </a>
        @else
        <a href="{{ url('/login') }}" class="btn btn-call-to-action text-center">
          <span class="mx-4 px-3">PARTICIPA</span> DA CLICK AQUÍ
        </a>
        @endif
      </div>
    </div>
  </div>
</div>
<!-- Fin Establecimientos Participantes -->

<!-- Ganadores -->
<div class="container-fluid ganadores" id="ganadores">
  <div class="row text-center justify-content-center">
    <div class="col-12 mt-5 wow fadeInUp" data-wow-offset="120" data-wow-duration="1s" data-wow-delay="0.5s">
      <h1 class="blanco ganadores_title">GANADORES</h1>
    </div>
    <div class="col-10 mt-2">
      <ul class="nav nav-tabs justify-content-center" id="ganadoresTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="semana1-tab" data-scroll-ignore data-toggle="tab" href="#semana1" role="tab"
            aria-controls="semana1" aria-selected="true">SEMANA 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="semana2-tab" data-scroll-ignore data-toggle="tab" href="#semana2" role="tab"
            aria-controls="semana2" aria-selected="false">SEMANA 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="semana3-tab" data-scroll-ignore data-toggle="tab" href="#semana3" role="tab"
            aria-controls="semana3" aria-selected="false">SEMANA 3</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="semana4-tab" data-scroll-ignore data-toggle="tab" href="#semana4" role="tab"
            aria-controls="semana4" aria-selected="false">SEMANA 4</a>
        </li>
      </ul>
      <div class="tab-content" id="ganadoresTabContent">
        @for ($i=1; $i <= 4; $i++) <div class="tab-pane fade show" ng-class="{ 'active': {{$i}}==1 }" id="semana{{$i}}"
          role="tabpanel" aria-labelledby="semana{{$i}}-tab">
          <div class="row justify-content-center">
            <div class="col-12 content-table">
              <table class="table table-borderless table-responsive table-ganadores-home">
                <thead>
                  <tr>
                    <th scope="col" width="30%">NOMBRE</th>
                    <th scope="col" width="30%">TIENDA</th>
                    <th scope="col" width="30%">PREMIO</th>
                  </tr>
                </thead>
                <tbody class="tabla-resp">
                  @php
                  $j = 0
                  @endphp
                  @foreach ($ganadores as $ganador)
                  @if ($ganador->id_semana == $i)
                  <tr>
                    <td>{{ $ganador['user']->nombre }} {{ $ganador['user']->apellido }}</td>
                    <td>{{ $ganador['user']->tickets[0]->establecimiento->nombre}}</td>
                    <td>{{ $ganador['premio']->nombre }}</td>
                  </tr>
                  @php
                  $j++
                  @endphp
                  @endif
                  @endforeach
                </tbody>
              </table>
              @if ($j == 0)
              <h2 class="azul">No hay ganadores</h2>
              @endif
            </div>
          </div>
      </div>
      @endfor
    </div>
  </div>
</div>
</div>
<!-- Fin Ganadores -->

@endsection