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
                            Ticket</a>
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
                                <th>Registro</th>
                                <th>Fecha</th>
                                <th class="no-sort"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="ticket in tickets | filter:search" ng-if="ticket.user.isAdmin == 0">
                                <td><% ticket.id_ticket %></td>
                                <td>
                                    <% ticket.user.nombre %> <% ticket.user.apellido %>
                                </td>
                                <td><% ticket.no_ticket %></td>
                                <td><% ticket.monto | currency %><i class="la la-pencil" style="float:right;"></i></td>
                                <td ng-if="ticket.id_establecimiento != 9">
                                    <img class="mr-3" ng-src="{{ asset('<% ticket.establecimiento.url %>') }}" alt="image" width="90" />
                                </td>
                                <td ng-if="ticket.id_establecimiento == 9"><% ticket.otro_establecimiento%></td>
                                <td>
                                    <img ng-if=" ticket.registro_admin == 0" src="{{ asset('img/icons/register.svg') }}" width="22">
                                    <img ng-if=" ticket.registro_admin == 1" src="{{ asset('img/icons/whatsapp.svg') }}" width="22">
                                </td>
                                <td class="capitalize"><% ticket.created_at | amDateFormat:'D, MMMM' %></td>
                                <td>

                                    {{-- <span ng-if="ticket.ganador !=  null">
                                        <a class="text-light font-20 mr-2" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Este ticket ya es ganador.">
                                            <i class="fa fa-star"></i>
                                        </a>
                                    </span>
                                    <span ng-if="ticket.ganador == null" data-toggle="modal" data-target="#modalGanador<% ticket.id_ticket %>">
                                        <a class="text-light font-20 mr-2" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Elige como ganador a este usuario.">
                                            <i class="fa fa-star-o"></i>
                                        </a>
                                    </span> --}}
                                    <!-- START MODAL GANADOR -->
                                    {{-- <div class="modal fade" id="modalGanador<% ticket.id_ticket %>" tabindex="-1" role="dialog" aria-labelledby="modalGanador" aria-hidden="true">
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
                                    </div> --}}
                                    <!-- END MODAL GANADOR -->
                                    <span data-toggle="modal" data-target="#modalTicket<% ticket.id_ticket %>">
                                        <a class="text-light font-20" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Ver imagen de ticket.">
                                            <img src="{{ asset('img/icons/camera-blue.svg') }}" width="22">
                                        </a>
                                    </span>
                                    <!-- START MODAL TICKET -->
                                    {{-- <div class="modal fade" id="modalTicket<% ticket.id_ganador %>" tabindex="-1" role="dialog" aria-labelledby="modalTicket" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <form class="modal-content">
                                                <div class="modal-header p-4">
                                                    <h5 class="modal-title">TICKET</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body p-4"></div>}
                                                    <img src="{{ asset('img/icons/camera-blue.svg') }}" width="22">
                                                </div>
                                                <div class="modal-footer bg-primary-50">
                                                </div>
                                            </form>
                                        </div>
                                    </div> --}}
                                    <!-- END MODAL TICKET -->
                                    <!-- START MODAL GANADOR -->
                                    <div class="modal fade" id="modalTicket<% ticket.id_ticket %>" tabindex="-1" role="dialog" aria-labelledby="modalGanador" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <form class="modal-content">
                                                    <div class="modal-header p-4">
                                                        <h5 class="modal-title">TICKET</h5>
                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body p-4">
                                                        <img ng-src="<% ticket.url %>">
                                                    </div>
                                                    <div class="modal-footer bg-primary-50"></div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- END MODAL GANADOR -->
                                        <!-- START BORRAR -->
                                        <span data-toggle="modal" data-target="#modalTicket<% ticket.id_ticket %>">
                                            <a class="text-light font-20" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Ver imagen de ticket.">
                                                <img src="{{ asset('img/icons/eliminate.svg') }}" width="19">
                                            </a>
                                        </span>
                                        <!-- END BORRAR -->
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
