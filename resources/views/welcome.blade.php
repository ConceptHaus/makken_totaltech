@extends('layouts.app')

@section('content')

<!-- Header -->
<section class="header-home">
  <img class="img-pleca" src="{{ asset('img/elements/pleca.svg') }}" alt="Pleca Total Tech">
  <img class="img-silicon" src="{{ asset('img/images/product.png') }}" alt="Silicón">
  <img class="img-logo-ceys" src="{{ asset('img/logos/ceys-logo.svg') }}" alt="Ceys total Tech">
  <a href="#" class="btn-call-to-action text-center">
    <span>¡PARTICIPA!</span> DA CLICK AQUÍ
  </a>
</section>

<!-- Dinámica del concurso -->
<div id="dinamica" class="container-fluid dinamica pb-sm-5">
  <div class="row text-center justify-content-center">
    <div class="col-lg-12 col-md-12 mt-5">
      <h1>DINÁMICA DEL CONCURSO</h1>
    </div>
  </div>
  <div class="row text-center justify-content-center">
    <div class="row col-lg-8 justify-content-around">
      <div class="col-lg-3 col-sm-7">
        <img src="{{ asset('img/icons/step1.png') }}" class="pasos-img" alt="Paso 1">
        <div class="text-left text-responsive">
          <h5 class="no-margin responsive-title">COMPRA</h5>
          <h6 class="no-margin blanco responsive-title">PRODUCTOS</h6>
          <h5 class="blanco no-margin responsive-title"> CEYS Y TOTAL TECH.</h5>
        </div>
      </div>
      <div class="col-lg-3 col-sm-7">
        <img src="{{ asset('img/icons/step2.png') }}" class="pasos-img" alt="Paso 2">
        <div class="text-left text-responsive">
          <h5 class="no-margin responsive-title">REGISTRA</h5>
          <h6 class="no-margin blanco responsive-title">TU TICKET VÍA WHATSAPP AL 044 (55) 4342 – 7322 O EN
            <a href="www.tupuedescontodo.com">TUPUEDESCONTODO.COM</a></h6>
        </div>
      </div>
      <div class="col-lg-3 col-sm-7">
        <img src="{{ asset('img/icons/step3.png') }}" class="pasos-img" alt="Paso 3">
        <div class="text-left text-responsive">
          <h5 class="no-margin responsive-title">GANA</h5>
          <h6 class="no-margin blanco responsive-title responsive-title">UNA BICICLETA</h6>
          <h5 class="blanco no-margin responsive-title">CADA DÍA.</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="row text-center justify-content-center">
    <div class="col-lg-8 col-md-12 mt-5">
      <h6 class="blanco">MIENTRAS MÁS COMPRAS, MÁS OPORTUNIDADES TIENES DE GANAR.</h6>
      <h4>¡RECUERDA QUE TODAS LAS COMPRAS DE UN MISMO DÍA PARTICIPAN!</h4>
    </div>
  </div>
</div>
<!-- Fin Dinámica del concurso -->

<!-- Establecimientos Participantes -->
<div class="container pt-5 pb-5">
  <div class="row">
    <div class="row text-center col-lg-6 col-sm-12 mt-4 premio">
      <div class="col-12">
        <h2 class="azul">ESTABLECIMIENTOS PARTICIPANTES</h2>
      </div>
      <div class="col-6">
        <img class="tiendas-img" src="{{ asset('img/logos/walmart.png') }}" alt="Walmart">
        <img class="tiendas-img" src="{{ asset('img/logos/lacomer.png') }}" alt="Walmart">
        <img class="tiendas-img" src="{{ asset('img/logos/heb.png') }}" alt="Walmart">
        <img class="tiendas-img" src="{{ asset('img/logos/homedepot.png') }}" alt="Walmart">
      </div>
      <div class="col-6">
        <img class="tiendas-img" src="{{ asset('img/logos/soriana.png') }}" alt="Walmart">
        <img class="tiendas-img" src="{{ asset('img/logos/casacravioto.png') }}" alt="Walmart">
        <img class="tiendas-img" src="{{ asset('img/logos/lowes.png') }}" alt="Walmart">
        <img class="tiendas-img" src="{{ asset('img/logos/chedraui.png') }}" alt="Walmart">
      </div>
      <div class="col-12 mt-lg-3 mt-sm-5">
        <h5 class="azul">¡Y MUCHAS MÁS!</h5>
      </div>
    </div>
    <div class="row text-center col-lg-6 col-sm-12 mt-4 justify-content-center">
      <div class="col-12">
        <h2 class="azul">PREMIO</h2>
      </div>
      <div class="col-lg-11">
        <img class="img-fluid" src="{{ asset('img/images/bicycle.png') }}" alt="Premio Bicicleta">
        <h6 class="mt-3 gris">¡GANA UNA BICICLETA TODO TERRENO!</h6>
      </div>
      <div class="col-12">
        <a href="#" class="btn btn-call-to-action text-center">
          <span>¡PARTICIPA!</span> DA CLICK AQUÍ
        </a>
      </div>
    </div>
  </div>
</div>
<!-- Fin Establecimientos Participantes -->

<!-- Ganadores -->
<div class="container-fluid ganadores" id="ganadores">
  <div class="row text-center justify-content-center">
    <div class="col-12 mt-5">
      <h1 class="blanco">GANADORES</h1>
    </div>
    <div class="col-10 mt-2">
      <ul class="nav nav-tabs justify-content-center" id="ganadoresTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="semana1-tab" data-toggle="tab" href="#semana1" role="tab" aria-controls="semana1"
            aria-selected="true">SEMANA 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="semana2-tab" data-toggle="tab" href="#semana2" role="tab" aria-controls="semana2"
            aria-selected="false">SEMANA 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="semana3-tab" data-toggle="tab" href="#semana3" role="tab" aria-controls="semana3"
            aria-selected="false">SEMANA 3</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="semana4-tab" data-toggle="tab" href="#semana4" role="tab" aria-controls="semana4"
            aria-selected="false">SEMANA 4</a>
        </li>
      </ul>
      <div class="tab-content" id="ganadoresTabContent">
        <div class="tab-pane fade show active" id="semana1" role="tabpanel" aria-labelledby="semana1-tab">
          <div class="row justify-content-center">
            <div class="col-12 content-table">
              <table class="table table-borderless table-responsive">
                <thead>
                  <tr>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">TIENDA</th>
                    <th scope="col">PREMIO</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>mdo</td>
                  </tr>
                  <tr>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>fat</td>
                  </tr>
                  <tr>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>twitter</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="semana2" role="tabpanel" aria-labelledby="semana2-tab">
          <div class="row justify-content-center">
            <div class="col-12 content-table">
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">TIENDA</th>
                    <th scope="col">PREMIO</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>mdo</td>
                  </tr>
                  <tr>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>fat</td>
                  </tr>
                  <tr>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>twitter</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="semana3" role="tabpanel" aria-labelledby="semana3-tab">
          <div class="row justify-content-center">
            <div class="col-12 content-table">
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">TIENDA</th>
                    <th scope="col">PREMIO</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>mdo</td>
                  </tr>
                  <tr>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>fat</td>
                  </tr>
                  <tr>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>twitter</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="semana4" role="tabpanel" aria-labelledby="semana4-tab">
          <div class="row justify-content-center">
            <div class="col-12 content-table">
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">TIENDA</th>
                    <th scope="col">PREMIO</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>mdo</td>
                  </tr>
                  <tr>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>fat</td>
                  </tr>
                  <tr>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>twitter</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Fin Ganadores -->

@endsection
