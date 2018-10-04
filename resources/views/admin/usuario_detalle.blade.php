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
                <a class="btn btn-rounded btn-primary btn-air" name="posibleGanador" data-toggle="modal" data-target="#modalGanador{{$user->id_user}}">Posible Ganador</a>
                <!-- START MODAL GANADOR -->
                <div class="modal fade" id="modalGanador{{$user->id_user}}" tabindex="-1" role="dialog" aria-labelledby="modalGanador" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <form class="modal-content">
                            <div class="modal-header p-4">
                                <h5 class="modal-title">GANADOR</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body p-4">
                                <div class="form-group mb-4">
                                    <p>Selecciona la semana correspondiente al ganador.</p>
                                    <select class="form-control" id="type-filter" title="Semanas ganadores" ng-model="ticketganador.id_semana"  data-style="btn-solid">
                                        <option value="" disabled selectes>Semana</option>
                                        <option value="1">1 Semana</option>
                                        <option value="2">2 Semana</option>
                                        <option value="3">3 Semana</option>
                                        <option value="4">4 Semana</option>
                                    </select>
                                    <input class="form-control form-control-line datepicker date" id="new-event-start" type="text" name="start" value="">
                                    <input type="text" ng-model="ticketganador.id_ticket" hidden ng-init="ticketganador.id_ticket = ticket.id_ticket">
                                    <input type="text" ng-model="ticketganador.id_usuario" hidden ng-init="ticketganador.id_usuario = ticket.user.id">
                                </div>
                                <div class="form-group mb-4">
                                    <h5 class="text-center">No. Ticket</h5>
                                    <h4 class="text-center"><% ticket.no_ticket %></h4>
                                </div>
                                <p>¿Está seguro que los datos son correctos y estas eligiendo este ticket como ganador?</p>
                            </div>
                            <div class="modal-footer bg-primary-50">

                                <button class="btn btn-primary btn-rounded mr-3" type="button" ng-click="addGanador(ticketganador)">Aceptar</button>
                                <button class="btn btn-rounded mr-3" type="button" data-dismiss="modal" aria-label="Close">Cancelar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END MODAL GANADOR -->
                <a class="btn btn-rounded btn-primary btn-air" name="ganador">Ganador</a>
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
                                              <img src="{{ asset('img/icons/camera-blue.svg') }}" width="30">
                                          </a>
                                      </span>
                                      {{-- Start Borrar --}}
                                      <span>
                                          <a class="text-light font-20" data-content="Borrar">
                                            <i class="la la-times-circle-o"></i>
                                          </a>
                                      </span>
                                      {{-- End Borrar --}}
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
