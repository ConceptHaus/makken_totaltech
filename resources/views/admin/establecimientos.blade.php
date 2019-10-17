@extends('layouts.app-admin')

@section('content')
<!-- START PAGE CONTENT-->
<div class="page-content admin-view fade-in-up">
    <div class="ibox">
        <div class="ibox-body">
            <h5 class="font-strong mb-4">ESTABLECIMIENTOS</h5>
            <div class="flexbox mb-4">
                <div class="flexbox"></div>
                <div class="flexbox">
                    <div class="input-group-icon input-group-icon-left mr-3">
                        <span class="input-icon input-icon-right font-16"><i class="ti-search"></i></span>
                        <input ng-model="search" class="form-control form-control-rounded form-control-solid"
                            id="key-search" type="text" placeholder="Buscar ...">
                    </div>
                </div>
            </div>
            <div class="table-responsive row">
                <table ng-table="demo.tableParams" class="table table-bordered table-hover" id="products-table">
                    <thead class="thead-default thead-lg">
                        <tr>
                            <th>No.</th>
                            <th>Nombre</th>
                            <th>Logo</th>
                            <th>Monto</th>
                            <th>Usuarios registrados</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="establecimiento in establecimientos | filter:search">
                            <td>
                                <a href="{{ url('/admin/usuarios/establecimientos/<% establecimiento.id_establecimiento %>') }}">
                                    <% establecimiento.id_establecimiento %>
                                </a>
                            </td>
                            <td>
                                <a href="{{ url('/admin/usuarios/establecimientos/<% establecimiento.id_establecimiento %>') }}">
                                    <% establecimiento.nombre %>
                                </a>
                            </td>
                            <td>
                                <a href="{{ url('/admin/usuarios/establecimientos/<% establecimiento.id_establecimiento %>') }}">
                                    <img ng-if="establecimiento.nombre != 'Otro'" class="mr-3"
                                        ng-src="{{ asset('<% establecimiento.url %>') }}" alt="image" width="90" />
                                    <img ng-if="establecimiento.nombre == 'Otro'" class="img-establecimiento mr-3"
                                        ng-src="{{ asset('<% establecimiento.url %>') }}" alt="image" width="90" />
                                </a>
                            </td>
                            <td>
                                <a ng-if="establecimiento.monto >= 1" href="{{ url('/admin/usuarios/establecimientos/<% establecimiento.id_establecimiento %>') }}">
                                    <% establecimiento.monto | currency:"$" %>
                                </a>
                                <a ng-if="establecimiento.monto < 1" href="{{ url('/admin/usuarios/establecimientos/<% establecimiento.id_establecimiento %>') }}">
                                    $0.00
                                </a>
                            </td>
                            <td>
                                <a href="{{ url('/admin/usuarios/establecimientos/<% establecimiento.id_establecimiento %>') }}">
                                    <% establecimiento.usuarios %>
                                </a>
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
    <div class="font-13">2019 © Total Tech</div>
    <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
</footer>

@endsection