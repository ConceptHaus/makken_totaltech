@extends('layouts.app')

@section('content')
<div id="pageSytyle" class="container" ng-controller="userCtrl">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="panel">
                <div class="panel-body text-center">
                    <form id="formulario-ticket" class="form-horizontal">
                        {{ csrf_field() }}
                        <h3>REGÍSTRA TU TICKET</h3>

                        <div class="form-group">
                          <select ng-model="ticket.id_establecimiento" class="form-control" id="tienda" name="tienda" required>
                              <option value="" disabled selected>Selecciona Establecimiento</option>
                              <option ng-repeat="est in establecimientos" value="<% est.id_establecimiento %>"><% est.nombre %></option>

                          </select>
                        </div>


                        <div class="form-group">
                            <input id="ticket" ng-model="ticket.no_ticket" type="text" class="form-control" name="ticket" placeholder="Número de ticket" required>

                        </div>

                        <div class="form-group">
                            <input id="monto" ng-model="ticket.monto" type="number" class="form-control" mask="" name="monto" placeholder="Monto de compra" required>

                        </div>

                        <div class="form-group">
                            <div class="col-md-10 pointer">
                                {{-- <label class="custom-file">
                                  <span class="custom-file-control btn-submit-upload"><i class="fas fa-cloud-upload-alt"></i></span>
                                  <input ng-model="ticket.fileticket" ngf-select ngf-pattern="'image/*,application/pdf'" ngf-max-size="20MB" type="file" id="file" class="custom-file-input">

                                  </label> --}}

                                    <a class='btn-submit-upload pointer' href='javascript:;'>
                                      <i class="fas fa-cloud-upload-alt"></i>
                                      <input ng-model="ticket.fileticket" ngf-select ngf-pattern="'image/*,application/pdf'" ngf-max-size="20MB" type="file" id="file" class="inputfile" name="file" onchange='$("#upload-file-info").html($(this).val());'>
                                    </a>
                                    <span class='label label-info' id="upload-file-info"></span>

                                <h5 class="blanco mt-2">SUBE TU TICKET</h5>
                                <small>Formatos .jpg, .png o .pdf</small>
                            </div>
                        </div>

                        <div class="form-group">
                          <div class="col-md-12 form-check-inline">
                            <input class="form-control form-check-input" type="checkbox" name="privacidad" value="1">
                            <label class="form-check-label">He leído y aceptado los Términos y Condiciones.</label>
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" ng-click="addTicket(ticket)"  class="btn btn-submit">REGISTRAR</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
