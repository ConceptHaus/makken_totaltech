@extends('layouts.app')

@section('content')
<div id="pageSytyle" class="container" ng-controller="userCtrl">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="panel panel-register">
                <div class="panel-body text-center">
                    <a class="a-login" href="{{ route('login') }}">
                        Ya tengo una cuenta.
                    </a>
                    <h3>REGÍSTRATE</h3>
                    <form class="form-horizontal form-ajust">
                        {{ csrf_field() }}

                        <div class="form-row">
                            <div class="col form-group">
                                <input ng-model="user.nombre" id="name" type="text" class="form-control" name="name"  placeholder="Nombre" required autofocus>
                                
                            </div>
                            <div class="col form-group">
                                <input ng-model="user.apellido" id="lastname" type="text" class="form-control" name="lastname"  placeholder="Apellido" required autofocus>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col form-group">
                                <input ng-model="user.telefono" id="phone" type="text" class="form-control" name="phone"  placeholder="Teléfono" required autofocus>
                                
                            </div>
                            <div class="col form-group">
                                <input ng-model="user.cp" id="cp" type="text" class="form-control" name="cp"  placeholder="C.P." required autofocus>
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <input ng-model="user.correo" id="email" type="email" class="form-control" name="email" placeholder="Correo" required>
                            
                        </div>

                        <div class="form-group">
                            <input ng-model="user.password" id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>
                            
                        </div>

                        <div class="form-group">
                            <input ng-model="user.password_confirmation" id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar contraseña" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" ng-click="register(user,confirm)" class="btn btn-submit">ENTRAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
