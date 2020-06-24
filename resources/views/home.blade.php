@extends('layouts.app')

@section('content')
@php
$date = new DateTime('2019-10-21');
$now = new DateTime();
@endphp
{{-- <!-- Header -->
<section class="header-home header-user">
  <div class="texto-home col-lg-12 col-md-12 wow slideInLeft text-center" data-wow-duration="1s" data-wow-delay="0.5s">
    <!-- @if($date >= $now)
        <a href="" class="btn btn-call-to-action text-center disabled">
          <span class="mx-4 px-3">REGISTRA</span> A PARTIR DEL 21 DE OCTUBRE
        </a> -->
    <!-- @else -->
    <a href="{{ url('/ticket') }}" class="btn btn-call-to-action text-center">
<span class="mx-4 px-3">REGISTRA</span> DA CLICK AQUÍ
</a>
<!-- @endif -->
</div>
</section>
<!-- Fin de Header --> --}}

<!-- Tickets -->
<div id="pageStyle" class="login container-fluid" id="tickets">
  <div class="row text-center justify-content-center">
    <div class="col-10 content-table-tickets content-table">
      @if ($tickets->count() == 0)
      <h5 class="azul-dos mb-3">Aún no has registrado ningún ticket.</h5>
      @if($date >= $now)
      <a href="" class="btn btn-call-to-action text-center disabled">
        <span class="mx-4 px-3">REGISTRA</span> A PARTIR DEL 21 DE OCTUBRE
      </a>
      @else
      <a href="{{ url('/ticket') }}" class="btn btn-call-to-action text-center">
        <span class="mx-4 px-3">REGISTRA</span> DA CLICK AQUÍ
      </a>
      @endif
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
              <img class="img-establecimiento" src="{{$ticket->establecimiento->url}}"
                alt="{{$ticket->establecimiento->nombre}}">
              @else
              {{$ticket->otro_establecimiento}}
              @endif
            </td>
            <td class="no-border"> <img class="camera-icon" src="{{asset('img/icons/camera-blue.svg')}}" alt="Ticket"
                data-toggle="modal" data-target="#ticketModal{{$ticket->no_ticket}}">
              <!-- Modal Tickets -->
              <div class="modal fade" id="ticketModal{{$ticket->no_ticket}}" tabindex="-1" role="dialog"
                aria-labelledby="ticketModalTitle" aria-hidden="true">
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
 <!-- Modal -->
 <div class="modal fade" id="covidModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title font-italic text-center" id="exampleModalLabel">¡AVISO IMPORTANTE!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
          <p class="m-4">Debido a la contingencia vivida por el brote COVID-19 considerada causa de fuerza mayor,
              a partir del corte del 3 de abril de 2020 (semana 3 de participación), se suspende temporalmente la promoción
          </p>
          <img src="{{asset('img/images/montate.png')}}" class="img-fluid" alt="Ceys Logo">
          <p class="m-4">¡Visita el sitio con frecuencia para seguir participando una vez que se normalicen las activiades!</p>
          <p class="aviso m-4">*Los ganadores de las semanas 1,2 y 3 están confirmados y serán contactados para la entrega de sus premios</p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Aceptar</button>
      </div>
  </div>
  </div>
</div> 
@endsection