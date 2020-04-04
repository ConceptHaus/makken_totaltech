@extends('layouts.app')

@section('content')
<div id="pageStyle" class="login container" ng-controller="userCtrl">
    <img class="login__scooter d-none d-sm-block" src="{{ asset('img/images/razor.png') }}" alt="scooter">
    <img class="login__ceys-montack mx-auto d-flex wow " data-wow-duration="1s"
        src="{{ asset('img/images/ceys_logo.png') }}" alt="ceys-montack">
    <img class="login__img-silicon wow " data-wow-duration="1s" src="{{ asset('img/images/agarre_total.png') }}"
        alt="agarre-total">
    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-6 col-md-6 col-10">
            <div class="panel">
                <div class="panel-body text-center">
                    <form id="formulario-ticket" class="form-horizontal">
                        {{ csrf_field() }}
                        <h3>REGISTRA TU TICKET</h3>
                        <input ng-model="ticket.registro_admin" name="registro_admin"
                            ng-init="ticket.registro_admin = 0" type="text" hidden>
                        <div class="form-group">
                            <select ng-model="ticket.id_establecimiento" class="form-control" id="tienda" name="tienda"
                                required>
                                <option value="" disabled selected>Selecciona Establecimiento</option>
                                <option ng-repeat="est in establecimientos" value="<% est.id_establecimiento %>">
                                    <% est.nombre %></option>

                            </select>
                        </div>
                        {{-- <div class="form-group" ng-if="ticket.id_establecimiento == 9">
                            <input id="otro_establecimiento" ng-model="ticket.otro_establecimiento" type="text"
                                class="form-control" name="otro_establecimiento"
                                placeholder="Nombre del establecimiento" required>
                        </div> --}}

                        <div class="form-group">
                            <input id="ticket" ng-model="ticket.no_ticket" type="text" class="form-control"
                                name="ticket" placeholder="Número de ticket" required>
                        </div>

                        <div class="form-group">
                            <input id="monto" ng-model="ticket.monto" type="text" class="form-control" name="monto"
                                placeholder="Monto de compra en productos" ng-pattern="/^\d+$/" money required>
                                <div ng-cloak ng-if="ticket.monto < 99" class="alert alert-warning" role="alert">
                                    Tickets con monto menor a 100 pesos no participan.
                                </div>
                        </div>

                        <div>
                            <div class="col-md-12 pointer ticketupload">
                                <a class='btn-submit-upload pointer' href='javascript:;'>
                                    <h5 class="my-2 subetuticket">SUBE TU TICKET</h5>
                                    <input ng-model="ticket.fileticket" ngf-select
                                        ngf-pattern="'image/*,application/pdf'" ngf-max-size="5MB" type="file" id="file"
                                        class="inputfile" name="file"
                                        onchange='$("#upload-file-info").html($(this).val());'>
                                </a>
                                <span class='label label-info pt-lg-4 pt-md-4' id="upload-file-info"></span>

                            </div>

                        </div>
                        <div class="my-2">
                            <div class="col-md-12 formatos">
                                <small>Formatos .jpg, .png o .pdf</small>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 form-check-inline">
                                <input class="form-control form-check-input" ng-model="ticket.privacidad" type="checkbox" name="privacidad"
                                    value="1">
                                <label class="form-check-label">He leído y aceptado los <a class="terminosaddticket"
                                        href="{{asset('avisos/Gana Con Ceys Términos y Condiciones.pdf')}}"
                                        target="_blank"><b>Términos y
                                            Condiciones.</b></a></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                {{-- <button type="submit" ng-click="addTicket(ticket)" class="btn btn-submit"
                                    ng-disabled="!(ticket.privacidad) ||!(ticket.id_establecimiento) || !(ticket.no_ticket) || !(ticket.monto) || !(ticket.fileticket)"
                                    >REGISTRAR</button> --}}
                                <button type="submit" ng-click="addTicket(ticket)" class="btn btn-submit">REGISTRAR</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="covidModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-italic text-center" id="exampleModalLabel">¡AVISO IMPORTANTE!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="m-4">Debido a la contingencia vivida por el brote COVID-19 considerada causa de fuerza mayor,
                    a partir del corte del 3 de abril de 2020 (semana 3 de participación), se suspende temporalmente la promoción
                </p>
                <img src="{{asset('img/images/montate.png')}}" class="img-fluid" alt="Ceys Logo">
                <p class="m-4">¡Visita el sitio con frecuencia para seguir participando una vez que se normalicen las activiades!</p>
                <p class="aviso m-4">*Los ganadores de las semanas 1,2 y 3 están confirmados y serán contactados para la entrega de sus premios</p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Aceptar</button>
            </div>
        </div>
        </div>
    </div> 

</div>
@endsection