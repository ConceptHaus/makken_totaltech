@extends('layouts.app-admin')

@section('content')
    <!-- START PAGE CONTENT-->
    <div class="page-content admin-view fade-in-up">
        <div class="ibox">
            <div class="ibox-body">
                <h5 class="font-strong mb-4">GANADORES</h5>
                <div class="flexbox mb-4">
                    <div class="flexbox">
                        <label class="mb-0 mr-2">Filtro por semana:</label>
                        <select class="selectpicker show-tick form-control" id="type-filter" title="Selecciona"
                            data-style="btn-solid" data-width="150px">
                            <option>1 Semana</option>
                            <option>2 Semana</option>
                            <option>3 Semana</option>
                            <option>4 Semana</option>
                            <option value="">Todas</option>
                        </select>
                    </div>
                    <div class="input-group-icon input-group-icon-left mr-3">
                        <span class="input-icon input-icon-right font-16"><i class="ti-search"></i></span>
                        <input ng-model="search" class="form-control form-control-rounded form-control-solid" id="key-search" type="text"
                            placeholder="Buscar ...">
                    </div>
                </div>
                <div class="table-responsive row">
                    <table ng-table="demo.tableParams" class="table table-bordered table-hover">
                        <thead class="thead-default thead-lg">
                            <tr>
                                <th>No.</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Teléfono</th>
                                <th>No. Ticket</th>
                                <th>Monto</th>
                                <th>Semana</th>
                                <th>Fecha</th>
                                <th class="no-sort"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="ganador in ganadores | filter:search" ng-cloak>
                                <td><% ganador.id_ganador %></td>
                                <td><% ganador.user.nombre %></td>
                                <td><% ganador.user.correo %></td>
                                <td><% ganador.user.telefono %></td>
                                <td><% ganador.ticket.no_ticket %></td>
                                <td><% ganador.ticket.monto %></td>
                                <td><% ganador.id_semana %></td>
                                <td><% ganador.ticket.created_at %></td>
                                <td>
                                    <a class="text-muted font-16" href="{{ url('/admin/usuarios/detalle/1') }}" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Conocer detalle de usuario."><i class="ti-layout-list-thumb-alt"></i></a>
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
        <div class="font-13">2018 © Total Tech</div>
        <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
    </footer>
@endsection