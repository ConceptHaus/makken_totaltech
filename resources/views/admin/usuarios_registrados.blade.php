@extends('layouts.app-admin')

@section('content')
    <!-- START PAGE CONTENT-->
    <div class="page-content admin-view fade-in-up">
        <div class="ibox">
            <div class="ibox-body">
                <h5 class="font-strong mb-4">USUARIOS REGISTRADOS</h5>
                <div class="flexbox mb-4">
                    <div class="flexbox"></div>
                    <div class="input-group-icon input-group-icon-left input-group-search mr-3">
                        <span class="input-icon input-icon-right font-16"><i class="ti-search"></i></span>
                        <input class="form-control form-control-rounded form-control-solid" id="key-search" ng-model="search" type="text" placeholder="Buscar ...">
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
                                        <th>No. Tickets</th>
                                        <th>Fecha</th>
                                        <th class="sort"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr ng-repeat="usuario in usuarios | filter:search" ng-cloak>
                                        <td><% usuario.id %></td>
                                        <td><% usuario.nombre %> <% usuario.apellido %></td>
                                        <td><% usuario.correo %></td>
                                        <td><% usuario.telefono %></td>
                                        <td><% usuario.tickets.length %></td>
                                        <td><% usuario.created_at  %></td>
                                        <td>
                                            <a class="text-muted font-16" href="{{ url('/admin/usuarios/detalle/<% usuario.id %>') }}" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Conocer detalle de usuario."><i class="ti-layout-list-thumb-alt"></i></a>
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