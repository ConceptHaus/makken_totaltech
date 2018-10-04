@extends('layouts.app-admin')

@section('content')
    <!-- START PAGE CONTENT-->
    <div class="page-content fade-in-up">
        <div class="d-flex align-items-center mb-5">
            <span class="mr-4 static-badge badge-blue"><i class="la la-user"></i></span>
            <div>
                <h5 class="font-strong">Detalle Usuario</h5>
                <div class="text-light">{{$user->nombre}} {{$user->apellido}}</div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-5">
                <div class="ibox">
                    <div class="ibox-body">
                        <h5 class="font-strong mb-4">Informacion General</h5>
                        <div class="row align-items-center mb-3">
                            <div class="col-4 text-light">Nombre</div>
                            <div class="col-8">{{$user->nombre}} {{$user->apellido}}</div>
                        </div>
                        <div class="row align-items-center mb-3">
                            <div class="col-4 text-light">Dirección</div>
                            <div class="col-8">{{$user->direccion->municipio}}, {{$user->direccion->estado}}, {{$user->direccion->cp}} </div>
                        </div>
                        <div class="row align-items-center mb-3">
                            <div class="col-4 text-light">Correo</div>
                            <div class="col-8">{{$user->correo}}</div>
                        </div>
                        <div class="row align-items-center mb-3">
                            <div class="col-4 text-light">Teléfono</div>
                            <div class="col-8">{{$user->telefono}}</div>
                        </div>
                        <div class="row align-items-center mb-3">
                            <div class="col-4 text-light">Fecha registro</div>
                            <div class="col-8">{{$user->created_at}}</div>
                        </div>
                        <div class="row align-items-center mb-3">
                            <div class="col-4 text-light">Premios Ganados</div>
                            <div class="col-8">{{count($user->ganador)}}</div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-rounded btn-primary btn-air" type="button" name="posibleGanador">Posible Ganador</button>
                <button class="btn btn-rounded btn-primary btn-air" type="button" name="ganador">Ganador</button>
            </div>
            <div class="col-xl-7">
                <div class="ibox">
                    <div class="ibox-body">
                        <h5 class="font-strong mb-5">Tickets registrados</h5>
                        <table class="table table-bordered table-hover">
                            <thead class="thead-default thead-lg">
                                <tr>
                                    <th>No.</th>
                                    <th>No. Ticket</th>
                                    <th>Establecimiento</th>
                                    <th>Fecha</th>
                                    <th>Monto</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($user->tickets as $ticket)
                                <tr>
                                    <td>{{$ticket->id_ticket}}</td>
                                    <td>{{$ticket->no_ticket}}</td>
                                    <td>
                                      @if ($ticket->id_establecimiento != 9)
                                        <img class="mr-3" src="{{$ticket->establecimiento->url}}" width="60" />
                                      @else
                                        {{$ticket->otro_establecimiento}}
                                      @endif
                                    </td>
                                    <td>{{$ticket->created_at}}</td>
                                    <td>${{$ticket->monto}}</td>
                                    <td>
                                      <span data-toggle="modal" data-target="#modalTicket{{$ticket->id_ticket}}">
                                          <a class="text-light font-20" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Ver imagen de ticket.">
                                              <img src="{{ asset('img/icons/camera-blue.svg') }}" width="60">
                                          </a>
                                      </span>
                                      <!-- START MODAL GANADOR -->
                                      <div class="modal fade" id="modalTicket{{$ticket->id_ticket}}" tabindex="-1" role="dialog" aria-labelledby="modalGanador" aria-hidden="true">
                                              <div class="modal-dialog" role="document">
                                                  <form class="modal-content">
                                                      <div class="modal-header p-4">
                                                          <h5 class="modal-title">TICKET</h5>
                                                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">×</span>
                                                          </button>
                                                      </div>
                                                      <div class="modal-body p-4">
                                                          <img src="https://makkenbucket.s3.us-east-2.amazonaws.com/{{$ticket->url}}">
                                                      </div>
                                                      <div class="modal-footer bg-primary-50"></div>
                                                  </form>
                                              </div>
                                          </div>
                                      <!-- END MODAL GANADOR -->
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- <div class="d-flex justify-content-end">
                            <div class="text-right" style="width:300px;">
                                <div class="row font-strong font-15">
                                    <div class="col-6">Monto Total:</div>
                                    <div class="col-6">
                                        <div class="h5 font-strong">$6,500</div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTENT-->
    <!-- END PAGE CONTENT-->
    <footer class="page-footer">
        <div class="font-13">2018 © Total Tech</div>
        <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
    </footer>
@endsection
