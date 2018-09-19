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

                    <form class="form-horizontal form-ajust" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}
                        <h3>¿OLVIDASTE TU CONTRASEÑA?</h3>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Ingresa tu correo" required>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
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
