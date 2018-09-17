@extends('layouts.app')

@section('content')
  <!-- Header -->
  <section class="header-home">
    <img class="img-pleca" src="{{ asset('img/elements/pleca.svg') }}" alt="Pleca Total Tech">
    <img class="img-silicon" src="{{ asset('img/images/product.png') }}" alt="Silicón">
    <img class="img-logo-ceys wow fadeInUp" src="{{ asset('img/logos/ceys-logo.svg') }}" alt="Ceys total Tech">
    <div class="texto-home col-6">
      <h1>¡BIENVENIDO</h1>
      <h3 class="blanco">NOMBRE DE USUARIO!</h3>
    </div>
  </section>
  <!-- Fin de Header -->

  <!-- Tickets -->
  <div class="container-fluid ganadores" id="tickets">
    <div class="row text-center justify-content-center">
              <div class="col-10 content-table-tickets content-table">
                <table class="table table-borderless table-responsive">
                  <thead>
                    <tr>
                      <th scope="col">FECHA</th>
                      <th scope="col"># TICKET</th>
                      <th scope="col">CANTIDAD</th>
                      <th scope="col">ESTABLECIMIENTO</th>
                      <th scope="col" class="no-border">FOTO</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>mdo</td>
                      <td>Mark</td>
                      <td class="no-border"> <img class="camera-icon" src="{{asset('img/icons/camera-blue.svg')}}" alt="Ticket"> </td>
                    </tr>
                    <tr>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>fat</td>
                      <td>Mark</td>
                      <td class="no-border"> <img class="camera-icon" src="{{asset('img/icons/camera-blue.svg')}}" alt="Ticket"> </td>
                    </tr>
                    <tr>
                      <td>Larry</td>
                      <td>the Bird</td>
                      <td>twitter</td>
                      <td>Mark</td>
                      <td class="no-border"> <img class="camera-icon" src="{{asset('img/icons/camera-blue.svg')}}" alt="Ticket"> </td>
                    </tr>
                    <tr>
                      <td>Larry</td>
                      <td>the Bird</td>
                      <td>twitter</td>
                      <td>Mark</td>
                      <td class="no-border"> <img class="camera-icon" src="{{asset('img/icons/camera-blue.svg')}}" alt="Ticket"> </td>
                    </tr>
                    <tr>
                      <td>Larry</td>
                      <td>the Bird</td>
                      <td>twitter</td>
                      <td>Mark</td>
                      <td class="no-border"> <img class="camera-icon" src="{{asset('img/icons/camera-blue.svg')}}" alt="Ticket"> </td>
                    </tr>
                    <tr>
                      <td>Larry</td>
                      <td>the Bird</td>
                      <td>twitter</td>
                      <td>Mark</td>
                      <td class="no-border"> <img class="camera-icon" src="{{asset('img/icons/camera-blue.svg')}}" alt="Ticket"> </td>
                    </tr>
                  </tbody>
                </table>
              </div>
          </div>
  </div>
  <!-- Fin Tickets -->

@endsection
