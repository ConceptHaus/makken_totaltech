@extends('layouts.app')

@section('content')
  <!-- Header -->
  <section class="header-home header-user">
    <img class="img-pleca" src="{{ asset('img/elements/pleca3.svg') }}" alt="Pleca Total Tech">
    <img class="img-silicon wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5s" src="{{ asset('img/images/pega-sella-repara.png') }}" alt="Silicón">
    <img class="img-logo-ceys wow slideInUp" data-wow-duration="1s" data-wow-delay="0.5s" src="{{ asset('img/logos/ceys-logo.svg') }}" alt="Ceys total Tech">
    <div class="texto-home col-lg-12 col-md-12 wow slideInLeft text-center" data-wow-duration="1s" data-wow-delay="0.5s">
    <a href="{{ url('/ticket') }}" class="btn btn-call-to-action text-center">
        <span class="mx-4 px-3">PARTICIPA</span> DA CLICK AQUÍ
      </a>
    </div>
  </section>
  <!-- Fin de Header -->

  <!-- Tickets -->
  <div class="container-fluid ganadores" id="tickets">
    <div class="row text-center justify-content-center">
              <div class="col-10 content-table-tickets content-table">
                @if ($tickets->count() == 0)
                  <h5 class="azul-dos mb-3">Aún no has registrado ningún ticket.</h5>
                  <a href="{{ url('/ticket') }}" class="btn btn-call-to-action text-center">
                    <span>¡REGISTRA!</span> TU TICKET
                  </a>
                @else
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
                      <td>{{$ticket->created_at->format('d M')}}</td>
                      <td>{{$ticket->no_ticket}}</td>
                      <td>$ {{ number_format($ticket->monto, 2, '.', ',' ) }}</td>
                      <td>
                        @if ($ticket->id_establecimiento != 9)
                          <img class="img-establecimiento"src="{{$ticket->establecimiento->url}}" alt="{{$ticket->establecimiento->nombre}}">
                        @else
                          {{$ticket->otro_establecimiento}}
                        @endif
                      </td>
                      <td class="no-border"> <img class="camera-icon" src="{{asset('img/icons/camera-blue.svg')}}" alt="Ticket" data-toggle="modal" data-target="#ticketModal{{$ticket->no_ticket}}">
                        <!-- Modal Tickets -->
                        <div class="modal fade" id="ticketModal{{$ticket->no_ticket}}" tabindex="-1" role="dialog" aria-labelledby="ticketModalTitle" aria-hidden="true">
                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-body text-center">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h3 class="azul-dos normal no-margin">TICKET</h3>
                                <h5 class="azul-dos normal">{{$ticket->no_ticket}}</h5>
                                <br>
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
                @endif
              </div>
          </div>
  </div>
  <!-- Fin Tickets -->

@endsection
