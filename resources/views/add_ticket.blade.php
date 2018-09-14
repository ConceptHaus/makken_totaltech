@extends('layouts.app-forms')

@section('content')
<div id="pageSytyle" class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="panel">
                <div class="panel-body text-center">
                    <form id="formulario-ticket" class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <h3>REGÍSTRA TU TICKET</h3>
                        <p class="text-left"><strong>Tienda de <i>"..."/"..."</i></strong></p>
                        {{-- <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Usuario" required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div> --}}
                        <div class="form-group">
                          <select class="form-control" id="tienda" name="tienda" required>
                              <option>Selecciona Establecimiento v</option>
                              <option>Tienda 1</option>
                              <option>Tienda 2</option>
                              <option>Tienda 3</option>
                              <option>Tienda 4</option>
                              <option>Tienda 5</option>
                          </select>
                        </div>

                        {{-- <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div> --}}

                        <div class="form-group{{ $errors->has('ticket') ? ' has-error' : '' }}">
                            <input id="ticket" type="number" class="form-control" name="ticket" placeholder="Número de ticket" required>
                            @if ($errors->has('ticket'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('ticket') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('monto') ? ' has-error' : '' }}">
                            <input id="monto" type="number" class="form-control" mask="" name="monto" placeholder="Monto de compra en productos ''...''" required>
                            @if ($errors->has('ticket'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('monto') }}</strong>
                                </span>
                            @endif
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

                        {{-- <div class="form-group content-actions">
                            <p>¿No tienes cuenta? <a class="" href="{{ route('register') }}">Regístrate.</a></p>
                            <a class="a-forget-password" href="{{ route('password.request') }}">
                                ¿Olvidaste tu contraseña?
                            </a>
                        </div> --}}
                        {{-- <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div> --}}
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
