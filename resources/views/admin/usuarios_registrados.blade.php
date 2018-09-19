@extends('layouts.app-admin')

@section('content')
<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-content admin-view fade-in-up">
        <div class="ibox">
            <div class="ibox-body">
                <h5 class="font-strong mb-4">USUARIOS REGISTRADOS</h5>
                <div class="flexbox mb-4">
                    <div class="flexbox"></div>
                    <div class="input-group-icon input-group-icon-left input-group-search mr-3">
                        <span class="input-icon input-icon-right font-16"><i class="ti-search"></i></span>
                        <input class="form-control form-control-rounded form-control-solid" id="key-search" type="text" placeholder="Buscar ...">
                    </div>
                </div>
                <div class="table-responsive row">
                    <table class="table table-bordered table-hover" id="orders-table">
                        <thead class="thead-default thead-lg">
                            <tr>
                                <th>No.</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Teléfono</th>
                                <th>No. Tickets</th>
                                <th>Fecha</th>
                                <th class="no-sort"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Becky Brooks</td>
                                <td>becky.brooks@gmail.com</td>
                                <td>(55) 5454 5454</td>
                                <td>1</td>
                                <td>17.05.2018</td>
                                <td>
                                    <a class="text-muted font-16" href="{{ url('/admin/usuarios/detalle/1') }}" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Conocer detalle de usuario."><i class="ti-layout-list-thumb-alt"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Becky Cuevas</td>
                                <td>becky.brooks@gmail.com</td>
                                <td>(55) 5454 5454</td>
                                <td>1</td>
                                <td>17.05.2018</td>
                                <td>
                                    <a class="text-muted font-16" href="{{ url('/admin/usuarios/detalle/2') }}" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Conocer detalle de usuario."><i class="ti-layout-list-thumb-alt"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Becky Dhason</td>
                                <td>becky.brooks@gmail.com</td>
                                <td>(55) 5454 5454</td>
                                <td>1</td>
                                <td>17.05.2018</td>
                                <td>
                                    <a class="text-muted font-16" href="{{ url('/admin/usuarios/detalle/3') }}" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Conocer detalle de usuario."><i class="ti-layout-list-thumb-alt"></i></a>
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
</div>
</div>
@endsection