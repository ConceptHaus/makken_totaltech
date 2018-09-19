@extends('layouts.app-admin')

@section('content')
    <!-- START PAGE CONTENT-->
    <div class="page-content admin-view fade-in-up">
        <div class="ibox">
            <div class="ibox-body">
                <div class="flexbox mb-5">
                    <h5 class="font-strong">TICKETS</h5>
                    <div class="flexbox">
                        <div class="input-group-icon input-group-icon-left mr-3">
                            <span class="input-icon input-icon-right font-16"><i class="ti-search"></i></span>
                            <input ng-model="search" class="form-control form-control-rounded form-control-solid" id="key-search" type="text"
                                placeholder="Buscar ...">
                        </div>
                        <a class="btn btn-rounded btn-primary btn-air" href="{{ url('/admin/tickets/nuevo') }}">Agregar
                            Tickect</a>
                    </div>
                </div>
                <div class="table-responsive row">
                    <table ng-table="demo.tableParams" class="table table-bordered table-hover" id="customers-table">
                        <thead class="thead-default thead-lg">
                            <tr>
                                <th>No.</th>
                                <th>Nombre</th>
                                <th>No. Ticket</th>
                                <th>Monto</th>
                                <th>Establecimiento</th>
                                <th>Fecha</th>
                                <th class="no-sort"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="ganador in ganadores | filter:search">
                                <td><% ganador.id_ganador %></td>
                                <td>
                                    <% ganador.user.nombre %>
                                </td>
                                <td><% ganador.user.telefono %></td>
                                <td><% ganador.ticket.monto %></td>
                                <td><img class="mr-3" src="{{ asset('img/logos/chedraui.png') }}" alt="image" width="90" /></td>
                                <td><% ganador.ticket.created_at %></td>
                                <td>
                                    <span data-toggle="modal" data-target="#modalGanador">
                                        <a class="text-light font-20 mr-2" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Elige como ganador a este usuario.">
                                            <i class="fa fa-star-o"></i>
                                        </a>
                                    </span>
                                    <span data-toggle="modal" data-target="#modalTicket">
                                        <a class="text-light font-20" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Ver imagen de ticket.">
                                            <img src="{{ asset('img/icons/camera-blue.svg') }}" width="22">
                                        </a>
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- START MODAL TICKET -->
                    <div class="modal fade" id="modalTicket" tabindex="-1" role="dialog" aria-labelledby="modalTicket" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <form class="modal-content">
                                <div class="modal-header p-4">
                                    <h5 class="modal-title">TICKET</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body p-4">
                                    <img class="mr-3" src="{{ asset('img/elements/ticket-default-2.jpg') }}" alt="image"/>
                                </div>
                                <div class="modal-footer bg-primary-50">
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END MODAL TICKET -->
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
                                        <select class="selectpicker show-tick form-control" id="type-filter" title="Semanas ganadores" data-style="btn-solid">
                                            <option>1 Semana</option>
                                            <option>2 Semana</option>
                                            <option>3 Semana</option>
                                            <option>4 Semana</option>
                                            <option value="">Todas</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-4">
                                        <h5 class="text-center">No. Ticket</h5>
                                        <h4 class="text-center">545676 - 647423</h4>
                                    </div>
                                    <p>¿Está seguro que los datos son correctos y estas eligiendo este ticket como ganador?</p>
                                </div>
                                <div class="modal-footer bg-primary-50">
                                    <button class="btn btn-primary btn-rounded mr-3" type="button">Acepto</button>
                                    <button class="btn btn-rounded mr-3" type="button" data-dismiss="modal" aria-label="Close">Cancelar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END MODAL GANADOR -->
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTENT-->
    <footer class="page-footer">
        <div class="font-13">2018 © Makken & ConceptHaus</div>
        <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
    </footer>

@endsection