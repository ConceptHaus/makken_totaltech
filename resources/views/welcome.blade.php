@extends('layouts.app')

@section('content')

  <!-- Header -->
  <div class="container-fluid fondo">
    <div class="row align-items-end fila-header">
      <div class="col-lg-8 col-md-6 text-center justify-content-end ">
        <a href="#" class="btn">¡PARTICIPA!<br>DA CLICK AQUÍ</a>
      </div>
      <div class="col-lg-2 col-md-6 justify-content-end ">
        <img class="img-fluid" src="{{ asset('img/logos/ceys-logo.svg') }}" alt="Silicón">
      </div>
      <div class="col-lg-2 col-md-6 justify-content-end ">
        <img class="silicon img-fluid" src="{{ asset('img/images/product.png') }}" alt="Silicón">
      </div>
    </div>
  </div>
  <!-- Fin del Header -->

  <!-- Dinámica del concurso -->
  <div class="container-fluid dinamica">
      <div class="row text-center justify-content-center">
        <div class="col-lg-6 col-md-12 mt-5">
          <p>DINÁMICA DEL CONCURSO</p>
        </div>
      </div>
      <div class="row text-center justify-content-center">
        <div class="row col-lg-8 justify-content-around">
          <div class="col-lg-3 col-md-3">
            <img src="{{ asset('img/icons/step1.png') }}" class="img-fluid pasos-img" alt="Paso 1">
            <div> <p>COMPRA
  PRODUCTOS CEYS Y TOTAL TECH.</p> </div>
          </div>
          <div class="col-lg-3 col-md-3">
            <img src="{{ asset('img/icons/step2.png') }}" class="img-fluid pasos-img" alt="Paso 2">
            <div> <p>REGISTRA
  TU TICKET VÍA WHATSAPP AL
  044 (55) 4342 – 7322 O EN
  TUPUEDESCONTODO.COM</p> </div>
          </div>
          <div class="col-lg-3 col-md-3">
            <img src="{{ asset('img/icons/step3.png') }}" class="img-fluid pasos-img" alt="Paso 3">
            <div> <p>GANA
  UNA BICICLETA
  CADA DÍA.</p> </div>
          </div>
        </div>
      </div>
      <div class="row text-center justify-content-center">
        <div class="col-lg-8 col-md-12 mt-5">
          <p>MIENTRAS MÁS COMPRAS, MÁS OPORTUNIDADES TIENES DE GANAR.
  ¡RECUERDA QUE TODAS LAS COMPRAS DE UN MISMO DÍA PARTICIPAN!</p>
        </div>
      </div>
    </div>
  <!-- Fin Dinámica del concurso -->

  <!-- Establecimientos Participantes -->
  <div class="container">
    <div class="row">
      <div class="row text-center col-6 mt-4">
        <div class="col-12">
          <p>ESTABLECIMIENTOS PARTICIPANTES</p>
        </div>
        <div class="col-6">
          <img class="img-fluid tiendas-img" src="{{ asset('img/logos/walmart.png') }}" alt="Walmart">
          <img class="img-fluid tiendas-img" src="{{ asset('img/logos/lacomer.png') }}" alt="Walmart">
          <img class="img-fluid tiendas-img" src="{{ asset('img/logos/heb.png') }}" alt="Walmart">
          <img class="img-fluid tiendas-img" src="{{ asset('img/logos/homedepot.png') }}" alt="Walmart">
        </div>
        <div class="col-6">
          <img class="img-fluid tiendas-img" src="{{ asset('img/logos/soriana.png') }}" alt="Walmart">
          <img class="img-fluid tiendas-img" src="{{ asset('img/logos/casacravioto.png') }}" alt="Walmart">
          <img class="img-fluid tiendas-img" src="{{ asset('img/logos/lowes.png') }}" alt="Walmart">
          <img class="img-fluid tiendas-img" src="{{ asset('img/logos/chedraui.png') }}" alt="Walmart">
        </div>
        <div class="col-12">
          <p>¡Y MUCHAS MÁS!</p>
        </div>
      </div>
      <div class="row text-center col-6 mt-4 justify-content-center">
        <div class="col-12">
          <p>PREMIO</p>
        </div>
        <div class="col-8">
          <img class="img-fluid" src="{{ asset('img/images/bicycle.png') }}" alt="Premio Bicicleta">
        </div>
        <div class="col-12">
          <a class="btn" href="#">¡PARTICIPA! DA CLICK AQUÍ</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Fin Establecimientos Participantes -->

  <!-- Ganadores -->
  <div class="container-fluid ganadores" id="ganadores">
    <div class="row text-center justify-content-center">
      <div class="col-12 mt-5">
        <h1>GANADORES</h1>
      </div>
      <div class="col-10 mt-2">
        <ul class="nav nav-tabs justify-content-center" id="ganadoresTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="semana1-tab" data-toggle="tab" href="#semana1" role="tab" aria-controls="semana1" aria-selected="true">SEMANA 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="semana2-tab" data-toggle="tab" href="#semana2" role="tab" aria-controls="semana2" aria-selected="false">SEMANA 2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="semana3-tab" data-toggle="tab" href="#semana3" role="tab" aria-controls="semana3" aria-selected="false">SEMANA 3</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="semana4-tab" data-toggle="tab" href="#semana4" role="tab" aria-controls="semana4" aria-selected="false">SEMANA 4</a>
    </li>
  </ul>
  <div class="tab-content" id="ganadoresTabContent">
    <div class="tab-pane fade show active" id="semana1" role="tabpanel" aria-labelledby="semana1-tab">
      <div class="row justify-content-center">
        <div class="col-12">
          <table class="table table-dark">
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
        <div class="col-12">
          <table class="table table-dark">
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
        <div class="col-12">
          <table class="table table-dark">
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
                  <td>@mdo</td>
                </tr>
                <tr>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="semana4" role="tabpanel" aria-labelledby="semana4-tab">
      <div class="row justify-content-center">
        <div class="col-12">
          <table class="table table-dark">
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
                  <td>@mdo</td>
                </tr>
                <tr>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
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
