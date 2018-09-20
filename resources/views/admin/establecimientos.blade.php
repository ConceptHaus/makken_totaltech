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
                            <input ng-model="search" class="form-control form-control-rounded form-control-solid" id="key-search" type="text"
                                placeholder="Buscar ...">
                        </div>
                        <a class="btn btn-rounded btn-primary btn-air" href="{{ url('/admin/establecimientos/nuevo') }}">Agregar establecimiento</a>
                    </div>
                </div>
                <div class="table-responsive row">
                    <table ng-table="demo.tableParams" class="table table-bordered table-hover" id="products-table">
                        <thead class="thead-default thead-lg">
                            <tr>
                                <th>No.</th>
                                <th>Nombre</th>
                                <th>Logo</th>
                                {{-- <th class="no-sort"></th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="establecimiento in establecimientos">
                                <td><% establecimiento.id_establecimiento %></td>
                                <td>
                                    <% establecimiento.nombre %>
                                </td>
                                <td><img class="mr-3" ng-src="{{ asset('<% establecimiento.url %>') }}" alt="image" width="90" /></td>
                                {{-- <td>
                                    <a class="text-light mr-3 font-16" href="{{ url('/admin/establecimientos/editar') }}"><i class="ti-pencil"></i></a>
                                    <a class="text-light font-16" href="javascript:;"><i class="ti-trash"></i></a>
                                </td> --}}
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