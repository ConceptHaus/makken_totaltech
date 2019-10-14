@extends('layouts.app-admin')

@section('content')
<!-- START PAGE CONTENT-->
<div class="page-heading">
    <h1 class="page-title">Reporte General</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><i class="la la-calendar-minus-o" style="font-size: 20px;"></i> Fecha</li>
        <li class="breadcrumb-item"><% date | date:'dd/MM/yyyy' %></li>
    </ol>
</div>
<div class="page-content fade-in-up">
    {{-- Participantes --}}
    <div class="row">
        <div class="col-md-6 col-xl-4">
            <div class="ibox">
                <div class="ibox-body">
                    <div class="flexbox mb-3">
                        <div class="col-md-7">
                            <div class="easypie centered" data-percent="100" data-size="120" data-line-width="8">
                                <span
                                    class="easypie-data h2 font-strong text-blue-total"><% dashboard_data.data.users %></span>
                            </div>
                        </div>
                        <span class="flexbox">
                            <span>PARTICIPANTES <br> ACUMULADOS</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="ibox">
                <div class="ibox-body">
                    <div class="flexbox mb-3">
                        <div class="col-md-7">
                            <div class="easypie centered" data-percent="100" data-size="120" data-line-width="8">
                                <span
                                    class="easypie-data h2 font-strong text-blue-total"><% dashboard_data.data.tickets %></span>
                            </div>
                        </div>
                        <span class="flexbox">
                            <span>TICKECTS <br> ACUMULADOS
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="ibox">
                <div class="ibox-body">
                    <div class="flexbox mb-3">
                        <div class="col-md-7">
                            <div class="easypie centered" data-percent="100" data-size="120" data-line-width="8">
                                <span
                                    class="easypie-data h2 font-strong text-blue-total"><% dashboard_data.data.ganadores %></span>
                            </div>
                        </div>
                        <span class="flexbox">
                            <span>PARTICIPANTES <br> GANADORES</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Fin de Participantes --}}
    <div class="row">
        {{-- Participantes Info--}}
        <div class="col-xl-4">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">TIPOS DE REGISTROS TICKETS</div>
                </div>
                <div class="ibox-body">
                    <ul class="list-group list-group-divider list-group-full">
                        <li class="list-group-item flexbox">
                            <span class="mr-3"><img src="{{asset('img/icons/register.svg')}}" width="30"><span
                                    class="ml-3"> Usuarios</span></span>
                            <span class="mb-0 ml-2"><% dashboard_data.data.tickets_web %></span>
                        </li>
                        <li class="list-group-item flexbox">
                            <span class="mr-3"><img src="{{asset('img/icons/whatsapp.svg')}}" width="30"><span
                                    class="ml-3"> Whatsapp</span></span>
                            <span class="mb-0 ml-2"><% dashboard_data.data.tickets_whatsapp %></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">TOP TIENDAS</div>
                </div>
                <div class="ibox-body ibox-ajust" style="padding: 19px 25px 19px;">
                    <ul class="list-group list-group-divider list-group-full">
                        <li class="list-group-item flexbox"
                            ng-repeat="establecimiento in dashboard_data.data.establecimientos_top">
                            <span class="mr-3">
                                <img ng-if="establecimiento.nombre != 'Otro'"
                                    ng-src="{{ asset('<% establecimiento.url %>') }}" alt="image" width="90" />
                                <img ng-if="establecimiento.nombre == 'Otro'"
                                    ng-src="{{ asset('<% establecimiento.url %>') }}" alt="image" width="120" />
                            </span>

                            <span class="mb-0 ml-2"><% establecimiento.total %></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- Fin Participantes Info --}}
        {{-- Reportes --}}
        <div class="col-xl-8">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">TOP TICKETS CON MAYOR MONTO DE COMPRA</div>
                </div>
                <div class="ibox-body ibox-ajust table-responsive">
                    <table ng-table="demo.tableParams" class="table table-bordered table-hover" id="products-table">
                        <thead class="thead-default thead-lg">
                            <tr>
                                <th>Establecimiento</th>
                                <th>No. Ticket</th>
                                <th>Monto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="ticket_monto in dashboard_data.data.montos_top | orderBy:'-monto'">
                                <td><img src="{{asset('<% ticket_monto.url %>')}}" width="90"></td>
                                <td><% ticket_monto.no_ticket %></td>
                                <td><% ticket_monto.monto | currency:"$" %></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- Fin Reportes --}}
    </div>
</div>
<!-- END PAGE CONTENT-->
<footer class="page-footer">
    <div class="font-13">2019 © Total Tech</div>
    <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
</footer>
@endsection