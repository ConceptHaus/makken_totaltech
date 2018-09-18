@extends('layouts.app')

@section('content')
<div id="pageSytyle" class="container" ng-controller="userCtrl">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="panel">
                <div class="panel-body text-center">
                    <form id="formulario-ticket" class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <h3>REGÍSTRA TU TICKET</h3>
                        
                        <div class="form-group">
                          <select class="form-control" id="tienda" name="tienda" required>
                              <option value="" disabled selected>Selecciona Establecimiento</option>
                              <option ng-repeat="est in establecimientos" value="est.id_establecimiento"><% est.nombre %></option>
                              
                          </select>
                        </div>

                      
                        <div class="form-group">
                            <input id="ticket" type="text" class="form-control" name="ticket" placeholder="Número de ticket" required>
                            
                        </div>

                        <div class="form-group">
                            <input id="monto" type="number" class="form-control" mask="" name="monto" placeholder="Monto de compra" required>
                            
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-submit">SUBE TU TICKET</button><br>
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
                                <button type="submit" class="btn btn-submit">REGISTRAR</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
