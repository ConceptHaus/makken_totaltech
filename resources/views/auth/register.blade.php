@extends('layouts.app-forms')

@section('content')
<div id="pageSytyle" class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="panel panel-register">
                <div class="panel-body text-center">
                    <a class="a-login" href="{{ route('login') }}">
                        Ya tengo una cuenta.
                    </a>
                    <h3>REGÍSTRATE</h3>
                    <form class="form-horizontal form-ajust" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-row">
                            <div class="col form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nombre" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" placeholder="Apellido" required autofocus>
                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="Teléfono" required autofocus>
                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col form-group{{ $errors->has('cp') ? ' has-error' : '' }}">
                                <input id="cp" type="text" class="form-control" name="cp" value="{{ old('cp') }}" placeholder="C.P." required autofocus>
                                @if ($errors->has('cp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Correo" required>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar contraseña" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-submit">ENTRAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
