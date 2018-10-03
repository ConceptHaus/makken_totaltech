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
                        <select ng-model="semana.selectTypeSemana" class="selectpicker show-tick form-control" title="Selecciona" data-style="btn-solid">
                            @foreach ($semanas as $semana)
                                <option value="{{$semana->id_semana}}">{{$semana->nombre}}</option>
                            @endforeach
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
                                <th>Veces Ganadas</th>
                                <th>Correo</th>
                                <th>Teléfono</th>
                                <th>Cantidad de Tickets</th>
                                <th>Monto Acumulado</th>
                                <th>Semana</th>
                                <th>Fecha</th>
                                <th class="no-sort"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="ganador in ganadores | filter:search | filter:{id_semana:semana.selectTypeSemana}" ng-cloak>
                                <td><% ganador.id_ganador %></td>
                                <td><% ganador.user.nombre %></td>
                                <td>3</td>
                                <td><% ganador.user.correo %></td>
                                <td><% ganador.user.telefono %></td>
                                <td><% ganador.ticket.length %></td>
                                <td><% ganador.ticket.monto | currency %></td>
                                <td><% ganador.id_semana %></td>
                                <td class="capitalize"><% ganador.ticket.created_at | amDateFormat:'D, MMMM' %></td>
                                <td>
                                    <a class="text-muted font-16" href="{{ url('/admin/usuarios/detalle/<% ganador.user.id %>') }}" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Conocer detalle de usuario."><i class="ti-layout-list-thumb-alt"></i></a>
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
