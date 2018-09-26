@extends('layouts.app')

@section('content')
<div id="pageSytyle" class="container" ng-controller="ForgotPasswordCtrl">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="panel panel-default">
                <div class="panel-body text-center">
                    <form class="form-horizontal">
                        {{ csrf_field() }}
                        <h3>¿OLVIDASTE TU CONTRASEÑA?</h3>
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('correo') ? ' has-error' : '' }}">
                            <input ng-model="resetP.correo" id="correo" type="email" class="form-control" name="correo" value="{{ $email or old('correo') }}" placeholder="Ingresa tu correo" required autofocus>
                            @if ($errors->has('correo'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('correo') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input ng-model="resetP.password" id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <input ng-model="resetP.password_confirmation" id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar contraseña" required>
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <button ng-click="reset(resetP)" type="submit" class="btn btn-submit">RESTABLECER</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
