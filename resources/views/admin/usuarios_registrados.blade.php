@extends('layouts.app-admin')

@section('content')
<!-- START PAGE CONTENT-->
<div class="page-content admin-view fade-in-up">
    <div class="ibox">
        <div class="ibox-body">
            <h5 class="font-strong mb-4">USUARIOS REGISTRADOS</h5>
            <div class="flexbox mb-4">
                <div class="flexbox"></div>
                <div class="flexbox mb-4">
                    <div class="flexbox"></div>
                    <div class="flexbox">
                        <div class="input-group-icon input-group-icon-left mr-3">
                            <span class="input-icon input-icon-right font-16"><i class="ti-search"></i></span>
                            <input ng-model="search" class="form-control form-control-rounded form-control-solid"
                                id="key-search" type="text" placeholder="Buscar ...">
                        </div>
                        <a class="btn btn-rounded btn-primary btn-air" href="{{ url('/admin/usuarios/nuevo') }}">Agregar
                            usuario</a>
                    </div>
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
                            <th>Monto Total</th>
                            <th>Registro</th>
                            <th>Fecha Registro</th>
                            <th class="sort"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="usuario in usuarios | filter:search" ng-cloak ng-if="usuario.isAdmin == 0">
                            <td><% usuario.id %></td>
                            <td><% usuario.nombre %> <% usuario.apellido %></td>
                            <td><% usuario.correo %></td>
                            <td><% usuario.telefono %></td>
                            <td><% usuario.num_tickets %></td>
                            <td><% usuario.monto_total | currency %></td>
                            <td>
                                <img ng-if=" usuario.registro_admin == 0" src="{{ asset('img/icons/register.svg') }}"
                                    width="22">
                                <img ng-if=" usuario.registro_admin == 1" src="{{ asset('img/icons/whatsapp.svg') }}"
                                    width="22">
                            </td>
                            <td class="capitalize"><% usuario.created_at | amDateFormat:'D, MMMM' %></td>
                            <td>
                                <a class="text-muted font-16"
                                    href="{{ url('/admin/usuarios/detalle/<% usuario.id %>') }}" data-container="body"
                                    data-toggle="popover" data-trigger="hover" data-placement="top"
                                    data-content="Conocer detalle de usuario."><i
                                        class="ti-layout-list-thumb-alt"></i></a>
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
    <div class="font-13">2019 © Montack</div>
    <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
</footer>
@endsection