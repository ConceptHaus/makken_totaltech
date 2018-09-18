@extends('layouts.app')

@section('content')
<div id="pageSytyle" class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="panel">
                <div class="panel-body text-center">
                    <form id="formulario-ticket" class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <h3>REGÍSTRA TU TICKET</h3>

                        <div class="form-group">
                          <select class="form-control" id="tienda" name="tienda" required>
                              <option>Selecciona Establecimiento</option>
                              <option>Tienda 1</option>
                              <option>Tienda 2</option>
                              <option>Tienda 3</option>
                              <option>Tienda 4</option>
                              <option>Tienda 5</option>
                          </select>
                        </div>


                        <div class="form-group{{ $errors->has('ticket') ? ' has-error' : '' }}">
                            <input id="ticket" type="number" class="form-control" name="ticket" placeholder="Número de ticket" required>
                            @if ($errors->has('ticket'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('ticket') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('monto') ? ' has-error' : '' }}">
                            <input id="monto" type="number" class="form-control" mask="" name="monto" placeholder="Monto de compra" required>
                            @if ($errors->has('ticket'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('monto') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group custom-margin">
                            <div class="col-md-10">
                                <label class="custom-file">
                                    <input type="file" id="file" class="custom-file-input">
                                    <span class="custom-file-control btn-submit-upload"><i class="fas fa-cloud-upload-alt"></i></span>
                                  </label>
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
