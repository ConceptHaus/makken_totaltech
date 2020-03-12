@extends('layouts.app')

@section('content')
<div id="pageStyle" class="login container" ng-controller="userCtrl">
    <img class="login__scooter d-none d-sm-block" src="{{ asset('img/images/razor.png') }}" alt="scooter">
    <img class="login__ceys-montack mx-auto d-flex wow " data-wow-duration="1s"
        src="{{ asset('img/images/ceys_logo.png') }}" alt="ceys-montack">
    <img class="login__img-silicon wow " data-wow-duration="1s"
        src="{{ asset('img/images/agarre_total.png') }}" alt="agarre-total">
    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-6 col-md-6 col-10">
            <div class="panel">
                <div class="panel-body text-center">
                    <form id="formulario-ticket" class="form-horizontal">
                        {{ csrf_field() }}
                        <h3>REGÍSTRA TU TICKET</h3>
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
                        <div class="form-group" ng-if="ticket.id_establecimiento == 9">
                            <input id="otro_establecimiento" ng-model="ticket.otro_establecimiento" type="text"
                                class="form-control" name="otro_establecimiento"
                                placeholder="Nombre del establecimiento" required>
                        </div>

                        <div class="form-group">
                            <input id="ticket" ng-model="ticket.no_ticket" type="text" class="form-control"
                                name="ticket" placeholder="Número de ticket" required>
                        </div>

                        <div class="form-group">
                            <input id="monto" ng-model="ticket.monto" type="text" class="form-control" mask=""
                                name="monto" placeholder="Monto de compra en productos" ng-pattern="/^$|^[0-9,]+$/"
                                money required>
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
                                <input class="form-control form-check-input" type="checkbox" name="privacidad"
                                    value="1">
                                <label class="form-check-label">He leído y aceptado los <a class="terminosaddticket"
                                        href="{{asset('avisos/Gana Con Ceys Términos y Condiciones.pdf')}}" target="_blank"><b>Términos y
                                            Condiciones.</b></a></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" ng-click="addTicket(ticket)" class="btn btn-submit"
                                    ng-disabled="!(ticket.id_establecimiento) || !(ticket.no_ticket) || !(ticket.monto) || !(ticket.fileticket)">REGISTRAR</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection