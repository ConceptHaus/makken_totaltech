@extends('layouts.app')

@section('content')
<div id="pageSytyle" class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="panel panel-forget">
                <div class="panel-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal form-ajust" method="POST" action="{{ url('/forgot') }}">
                        {{ csrf_field() }}
                        <h3>¿OLVIDASTE TU CONTRASEÑA?</h3>
                        <div class="form-group{{ $errors->has('correo') ? ' has-error' : '' }}">
                            <input ng-class="{'invalido': {{$errors->has('correo')}} }" id="correo" type="email" class="form-control" name="correo" value="{{ old('correo') }}" placeholder="Ingresa tu correo" required>
                            @if ($errors->has('correo'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('correo') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-submit">RECUPERAR</button>
                        </div>

                        <div class="form-group content-actions">
                            <a class="a-forget-password" href="{{ route('login') }}">
                                Regresar a iniciar sesión.
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
