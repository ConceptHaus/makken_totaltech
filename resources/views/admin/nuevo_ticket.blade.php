@extends('layouts.app-admin')

@section('content')
    <!-- START PAGE CONTENT-->
    <div class="page-content fade-in-up" style="padding-bottom: 20%;">
        <div class="ibox">
            <div class="ibox-body">
                <h5 class="font-strong mb-5">AGREGAR TICKET</h5>
                <div class="row">
                    <div class="col-lg-4 content-img-ticket">
                        <div class="text-center">
                            <img class="img-default-ticket" src="{{ asset('img/icons/camera-blue.svg') }}">
                        </div>
                        <div class="flexbox-b mt-4">
                            <div class="file-input-plus file-input"><i class="la la-plus-circle"></i>
                                <input id="nuevoticket" ng-model="ticket.fileticket" ngf-select ngf-pattern="'image/*,application/pdf'" ngf-max-size="20MB" type="file">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <form id="form" name="form" action="javascript:;">
                            <input ng-model="ticket.registro_admin" name="registro_admin" ng-init="ticket.registro_admin = 1" type="text" hidden>
                            <div class="row">
                                <div class="col-sm-6 form-group mb-4">
                                    <label>No. de Ticket</label>
                                    <input  ng-model="ticket.no_ticket" class="form-control form-control-solid" type="text" placeholder="Introduce tu número de ticket">
                                </div>
                                <div class="col-sm-6 form-group mb-4">
                                    <label>Monto</label>
                                    <input ng-pattern="/^$|^[0-9,]+$/" ng-model="ticket.monto" class="form-control form-control-solid" placeholder="$0.00" money/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group mb-4">
                                    <label>Establecimientos</label>
                                    <div>
                                        <select class="selectpicker form-control"ng-model="ticket.id_establecimiento" data-live-search="true" title="Selecciona establecimiento">
                                            @foreach ($establecimientos as $establecimiento)
                                                <option value="{{$establecimiento->id_establecimiento}}">{{$establecimiento->nombre}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mt-4" ng-if="ticket.id_establecimiento == 9">
                                      <label>Nombre del establecimiento</label>
                                      <div>
                                        <div class="form-group" >
                                            <input id="otro_establecimiento" ng-model="ticket.otro_establecimiento" type="text" class="form-control" name="otro_establecimiento" placeholder="Nombre del establecimiento" required>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 form-group mb-4">
                                    <label>Usuarios</label>
                                    <div>
                                        <select ng-model="ticket.id_usuario" class="selectpicker show-tick form-control" title="Selecciona el usuario de compra"
                                            data-style="btn-solid">
                                            @foreach ($users as $user)
                                              @if (!($user->isAdmin))
                                                <option value="{{$user->id}}">{{$user->correo}}</option>
                                              @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <button ng-click="addTicket(ticket)" class="btn btn-primary btn-air mr-2" ng-disabled="!(ticket.fileticket) || !(ticket.no_ticket) || !(ticket.monto) || !(ticket.id_establecimiento) || !(ticket.id_usuario)">Guardar</button>
                                <a class="btn btn-secondary" href="{{ url('/admin/tickets/registrados') }}">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTENT-->
    <footer class="page-footer">
        <div class="font-13">2018 © Total Tech</div>
        <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
    </footer>
@endsection
