@extends('layouts.app-admin')

@section('content')
    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-content admin-view fade-in-up">
            <div class="ibox">
                <div class="ibox-body">
                    <div class="flexbox mb-5">
                        <h5 class="font-strong">TICKETS</h5>
                        <div class="flexbox">
                            <div class="input-group-icon input-group-icon-left mr-3">
                                <span class="input-icon input-icon-right font-16"><i class="ti-search"></i></span>
                                <input class="form-control form-control-rounded form-control-solid" id="key-search" type="text"
                                    placeholder="Buscar ...">
                            </div>
                            <a class="btn btn-rounded btn-primary btn-air" href="{{ url('/nuevo/ticket') }}">Agregar Tickect</a>
                        </div>
                    </div>
                    <div class="table-responsive row">
                        <table class="table table-bordered table-hover" id="customers-table">
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
                                <tr>
                                    <td>1</td>
                                    <td>
                                        Connor Perez
                                    </td>
                                    <td>552233-223344</td>
                                    <td>$3,000</td>
                                    <td>Chedraui</td>
                                    <td>17.05.2018</td>
                                    <td>
                                        <a class="text-light font-16" href="javascript:;" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Elige como ganador a este usuario."><i class="fa fa-heart-o"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        Connor Perez
                                    </td>
                                    <td>552233-223344</td>
                                    <td>$3,000</td>
                                    <td>Chedraui</td>
                                    <td>17.05.2018</td>
                                    <td>
                                        <a class="text-light font-16" href="javascript:;" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Elige como ganador a este usuario."><i class="fa fa-heart-o"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        Connor Perez
                                    </td>
                                    <td>552233-223344</td>
                                    <td>$3,000</td>
                                    <td>Chedraui</td>
                                    <td>17.05.2018</td>
                                    <td>
                                        <a class="text-light font-16" href="javascript:;" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Elige como ganador a este usuario."><i class="fa fa-heart-o"></i></a>
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
    </div>
@endsection