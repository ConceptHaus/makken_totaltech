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
                            <tr ng-repeat="ticket in tickets | filter:search">
                                <td><% ticket.id_ticket %></td>
                                <td>
                                    <% ticket.user.nombre %> <% ticket.user.apellido %>
                                </td>
                                <td><% ticket.no_ticket %></td>
                                <td><% ticket.monto %></td>
                                <td>
                                    <% ticket.establecimiento.nombre %>
                                    {{-- <img class="mr-3" src="{{ asset('img/logos/chedraui.png') }}" alt="image" width="90" /> --}}
                                </td>
                                <td><% ticket.created_at %></td>
                                <td>
                                    <span data-toggle="modal" data-target="#modalGanador<% ticket.id_ticket %>">
                                        <a class="text-light font-20 mr-2" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Elige como ganador a este usuario.">
                                            <i class="fa fa-star-o"></i>
                                        </a>
                                    </span>
                                    <!-- START MODAL GANADOR -->
                                    <div class="modal fade" id="modalGanador<% ticket.id_ticket %>" tabindex="-1" role="dialog" aria-labelledby="modalGanador" aria-hidden="true">
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
                                                        <select class="form-control" id="type-filter" title="Semanas ganadores" ng-model="semana" data-style="btn-solid">
                                                            <option value="1">1 Semana</option>
                                                            <option value="2">2 Semana</option>
                                                            <option value="3">3 Semana</option>
                                                            <option value="4">4 Semana</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <h5 class="text-center">No. Ticket</h5>
                                                        <h4 class="text-center"><% ticket.no_ticket %></h4>
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
                                    <span data-toggle="modal" data-target="#modalTicket">
                                        <a class="text-light font-20" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Ver imagen de ticket.">
                                            <img src="{{ asset('img/icons/camera-blue.svg') }}" width="22">
                                        </a>
                                    </span>
                                    <!-- START MODAL TICKET -->
                                    <div class="modal fade" id="modalTicket<% ticket.id_ganador %>" tabindex="-1" role="dialog" aria-labelledby="modalTicket" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <form class="modal-content">
                                                <div class="modal-header p-4">
                                                    <h5 class="modal-title">TICKET</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body p-4">
                                                    <img class="mr-3" ng-src="<% ticket.url %>" alt="image"/>
                                                    {{-- {{ asset('img/elements/ticket-default-2.jpg') }} --}}
                                                </div>
                                                <div class="modal-footer bg-primary-50">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- END MODAL TICKET -->
                                </td>
                            </tr>
                        </tbody>
                    </table>                    
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