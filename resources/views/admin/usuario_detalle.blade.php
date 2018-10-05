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
                @if($user->posible_ganador == 0)
                    <a class="btn btn-rounded btn-primary btn-air" name="posibleGanador" data-toggle="modal" data-target="#modalPosibleGanador">Posible Ganador</a>
                @endif
                <!-- START MODAL POSIBLE GANADOR -->
                <div class="modal fade" id="modalPosibleGanador" tabindex="-1" role="dialog" aria-labelledby="modalPosibleGanador" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <form class="modal-content">
                            <div class="modal-header p-4">
                                <h5 class="modal-title">POSIBLE GANADOR</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body p-4">
                                <div class="form-group mb-4">
                                    <p>Estas a punto de envíar un correo para corroborar datos del posible ganador.</p>
                                </div>
                                <p>¿Está seguro que los datos son correctos y estas eligiendo este ticket como ganador?</p>
                                <form>
                                    <input type="text" ng-model="user.id_usuario" name="id_usuario" ng-init="user.id_usuario = {{$user->id}}" hidden>
                                </form>
                            </div>
                            <div class="modal-footer bg-primary-50">

                                <button class="btn btn-primary btn-rounded mr-3" type="button" ng-click="checkPosibleGanador(user)">Aceptar</button>
                                <button class="btn btn-rounded mr-3" type="button" data-dismiss="modal" aria-label="Close">Cancelar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END MODAL POSIBLE GANADOR -->
                @if($user->posible_ganador == 1)
                    <a class="btn btn-rounded btn-primary btn-air" name="ganador" data-toggle="modal" data-target="#modalGanador">Ganador</a>
                @endif
                <!-- START MODAL GANADOR -->
                <div class="modal fade" id="modalGanador" tabindex="-1" role="dialog" aria-labelledby="modalGanador" aria-hidden="true">
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
                                    <input type="text" ng-model="userGanador.id_usuario" ng-init="userGanador.id_usuario = {{$user->id}}" hidden>
                                    {{-- hidden --}}
                                    <select class="form-control" id="type-filter" title="Semanas ganadores" ng-model="userGanador.id_semana" data-style="btn-solid">
                                        <option value="" disabled selectes>Semana</option>
                                        <option value="1">1 Semana</option>
                                        <option value="2">2 Semana</option>
                                        <option value="3">3 Semana</option>
                                        <option value="4">4 Semana</option>
                                    </select>

                                    <div class="form-group" id="date_1">
                                        <label class="font-normal"></label>
                                        <div class="input-group date">
                                            <span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                                            <input class="form-control" type="text" ng-model="userGanador.dia">
                                        </div>
                                    </div>


                                    <div ng-if="userGanador.dia">
                                        <div ng-repeat="ticket_total in {{$tickets_totales}} | filter:userGanador.dia">
                                            <div class="form-group mb-4 row">
                                                <label class="col-sm-6 col-form-label">No. Tickets Acumulados</label>
                                                <div class="col-sm-6">
                                                    <input type="text" ng-model="userGanador.total_tickets" ng-init="userGanador.total_tickets = ticket_total.num_tickets" class="form-control form-control-solid" name="total_tickets" disabled>
                                                </div>
                                                <% userGanador.total_tickets %>
                                            </div>
                                            <div class="form-group mb-4 row">
                                                <label class="col-sm-6 col-form-label">Monto total acumulado</label>
                                                <div class="col-sm-6">
                                                    <input type="text" ng-model="userGanador.monto_total | currency" ng-init="userGanador.monto_total = ticket_total.monto_total" class="form-control form-control-solid" name="monto_total" disabled>
                                                </div>
                                                <% userGanador.monto_total %>
                                            </div>
                                        </div>
                                    </div> 

                                </div>
                                <p>¿Estás seguro que los datos son correctos y estas eligiendo a este usuario como ganador?</p>
                            </div>
                            <div class="modal-footer bg-primary-50">
                                <button class="btn btn-primary btn-rounded mr-3" type="button" ng-click="addGanador(userGanador)" ng-disabled="!(userGanador.id_usuario) || !(userGanador.id_semana) || !(userGanador.dia) || !(userGanador.total_tickets) || !(userGanador.monto_total)">Aceptar</button>
                                <button class="btn btn-rounded mr-3" type="button" data-dismiss="modal" aria-label="Close">Cancelar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END MODAL GANADOR -->
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
                              @foreach ($user->tickets as $key => $value)
                                  @php
                                    $dia[$key] = $value->created_at->toDateString();
                                  @endphp
                                  {{$dia[$key]}}
                                  @endforeach
                                @foreach($user->tickets as $key => $ticket)

                                  @php
                                    $date = $ticket->created_at->toDateString();
                                    $test = 0;
                                  @endphp
                                  @if ($key != 0)
                                    @php
                                      $test = $key-1;
                                    @endphp

                                  @endif
                                  @if ($ticket->created_at->toDateString() != $dia[$test] || $key == 0)
                                    <tr>
                                      <th colspan="6" style="text-align: center;">{{$ticket->created_at->format('d M Y')}}</th>
                                    </tr>
                                  @endif
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
                                    <td>{{$ticket->created_at->format('d M')}}</td>
                                    <td>${{$ticket->monto}}</td>
                                    <td>
                                      <span data-toggle="modal" data-target="#modalTicket{{$ticket->id_ticket}}">
                                          <a class="text-light font-20" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Ver imagen de ticket.">
                                              <img src="{{ asset('img/icons/camera-blue.svg') }}" width="22">
                                          </a>
                                      </span>
                                      {{-- Start Borrar --}}
                                      <span>
                                          <a class="text-light font-20" data-content="Borrar">
                                            {{-- <i class="la la-times-circle-o"></i> --}}
                                            <img src="{{ asset('img/icons/eliminate.svg') }}" width="18">
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
