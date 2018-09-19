@extends('layouts.app')

@section('content')
  <!-- Header -->
  <section class="header-home header-user">
    <img class="img-pleca" src="{{ asset('img/elements/pleca3.svg') }}" alt="Pleca Total Tech">
    <img class="img-silicon wow slideInRight" data-wow-duration="1s" data-wow-delay="0.5s" src="{{ asset('img/images/product.png') }}" alt="Silicón">
    <img class="img-logo-ceys wow slideInUp" data-wow-duration="1s" data-wow-delay="0.5s" src="{{ asset('img/logos/ceys-logo.svg') }}" alt="Ceys total Tech">
    <div class="texto-home col-6 wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
      <h1>¡BIENVENIDO</h1>
      <h3 class="blanco">{{auth()->user()->nombre}} {{auth()->user()->apellido}}!</h3>
      <a href="{{ url('/ticket') }}" class="btn btn-call-to-action text-center">
        <span>¡REGISTRA!</span> TÚ TICKET
      </a>
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
                    @foreach($tickets as $ticket)
                    <tr>

                      <td>{{$ticket->created_at}}</td>
                      <td>{{$ticket->no_ticket}}</td>
                      <td>${{$ticket->monto}}</td>
                      <td>{{$ticket->establecimiento->nombre}}</td>
                    <td class="no-border"> <img class="camera-icon" src="{{asset('img/icons/camera-blue.svg')}}" alt="Ticket" data-toggle="modal" data-target="#ticketModal{{$ticket->no_ticket}}">
                        <!-- Modal Tickets -->
                    <div class="modal fade" id="ticketModal{{$ticket->no_ticket}}" tabindex="-1" role="dialog" aria-labelledby="ticketModalTitle" aria-hidden="true">
                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-body text-center">
                                  {{-- <img class="img-fluid" src="{{ asset('img/backgrounds/bg-bike-mask-2.jpg') }}" alt="Ticket"> --}}
                                    <h1>TICKET</h1>
                                    <h1>{{$ticket->no_ticket}}</h1>
                                    <img class="img-fluid" src="{{ $ticket->url }}" alt="Cámara">
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Fin Modal Tickets -->
                       </td>

                    </tr>
                     @endforeach
                  </tbody>
                </table>
              </div>
          </div>
  </div>
  <!-- Fin Tickets -->

@endsection
