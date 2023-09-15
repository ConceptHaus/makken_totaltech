@extends('layouts.app-admin')

@section('content')
    <!-- START PAGE CONTENT-->
    <div class="page-content admin-view fade-in-up">
        <div class="ibox">
            <div class="ibox-body">
                <div class="flexbox mb-5">
                    <h5 class="font-strong">RESUMEN TICKETS POR USUARIO</h5>
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
                                <th>Promoción</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Total de Tickets</th>
                                <th>Monto Total</th>
                                <th>Fecha</th>
                                <th class="no-sort"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="ticketUsuario in ticketsUsuarios | filter:search" ng-if="ticketUsuario.isAdmin == 0">
                                <td><% ticketUsuario.id %></td>
                                <td><% ticketUsuario.tipo_promo_nombre %></td>
                                <td>
                                    <% ticketUsuario.nombre %> <% ticketUsuario.apellido %>
                                </td>
                                <td><% ticketUsuario.correo %></td>
                                <td><% ticketUsuario.num_tickets %></td>
                                <td><% ticketUsuario.monto_total | currency %></td>
                                <td class="capitalize"><% ticketUsuario.fecha_ganador %></td>
                                <td>
                                    <a class="text-muted font-16" href="{{ url('/admin/usuarios/detalle/<% ticketUsuario.id %>') }}" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Conocer detalle de usuario."><i class="ti-layout-list-thumb-alt"></i></a>
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
        <div class="font-13">2019 © Makken & ConceptHaus</div>
        <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
    </footer>

@endsection
