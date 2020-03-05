@extends('layouts.app')

@section('content')
<div id="pageStyle" class="container" ng-controller="ForgotPasswordCtrl">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="panel panel-forget">
                <div class="panel-body text-center">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form class="form-horizontal form-ajust">
                        {{ csrf_field() }}
                        <h3>¿OLVIDASTE TU CONTRASEÑA?</h3>
                        <div class="form-group{{ $errors->has('correo') ? ' has-error' : '' }}">
                            <input ng-model="correo.correo" id="correo" type="email" class="form-control" name="correo"
                                value="{{ old('correo') }}" placeholder="Ingresa tu correo" required>
                            @if ($errors->has('correo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('correo') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <button type="submit" ng-click="forgot2(correo)" class="btn btn-submit">RECUPERAR</button>
                        </div>

                        <div class="form-group content-actions">
                            <a class="a-forget-password" href="{{ route('login') }}">Regresar a iniciar sesión.</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <img class="img-silicon-login wow slideInLeft d-none" data-wow-duration="1s" data-wow-delay="0.5s"
        src="{{ asset('img/images/pega-sella-repara.png') }}" alt="Silicón">
</div>
@endsection