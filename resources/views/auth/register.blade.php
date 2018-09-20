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
                    <form class="form-horizontal form-ajust" >
                        {{ csrf_field() }}
                        <input ng-model="user.admin" name="admin" ng-init="user.admin = 0" type="text" hidden>
                        <div class="form-row">
                            <div class="col form-group">
                                <input ng-class="{'invalido': errors.nombre }" ng-model="user.nombre" id="name" type="text" class="form-control" name="name"  placeholder="Nombre" required autofocus>
                                <p ng-cloak class="error-form" ng-if="errors.nombre"><% errors.nombre[0] %></p>

                            </div>
                            <div class="col form-group">
                                <input ng-class="{'invalido': errors.apellido }" ng-model="user.apellido" id="lastname" type="text" class="form-control" name="lastname"  placeholder="Apellido" required autofocus>
                                <p ng-cloak class="error-form" ng-if="errors.apellido"><% errors.apellido[0] %></p>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col form-group">
                                <input ng-class="{'invalido': errors.telefono }" ng-model="user.telefono" id="phone" type="text" class="form-control" name="phone"  placeholder="Teléfono" required autofocus>
                                <p ng-cloak class="error-form" ng-if="errors.telefono"><% errors.telefono[0] %></p>
                            </div>
                            <div class="col form-group">
                                <input ng-class="{'invalido': errorCP }" ng-model="user.cp" id="cp" type="text" class="form-control" name="cp" ng-blur="getCP(user.cp)" placeholder="C.P." required autofocus>
                                <p ng-cloak class="error-form" ng-if="errorCP"><% errorCP %></p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col form-group">
                                <input ng-model="user.estado" id="estado" type="text" class="form-control" name="estado"  placeholder="Estado" required autofocus disabled>
                            </div>
                            <div class="col form-group">
                                <input ng-model="user.municipio" id="municipio" type="text" class="form-control" name="municipio"  placeholder="Municipio" required autofocus disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <input ng-class="{'invalido': errors.correo }" ng-model="user.correo" id="email" type="email" class="form-control" name="email" placeholder="Correo" required>
                            <p ng-cloak class="error-form" ng-if="errors.correo"><% errors.correo[0] %></p>
                        </div>

                        <div class="form-group">
                            <input ng-class="{'invalido': errors.password }" ng-model="user.password" id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>
                            <p ng-cloak class="error-form" ng-if="errors.password"><% errors.password[0] %></p>
                        </div>

                        <div class="form-group">
                            <input ng-class="{'invalido': errors.password_confirmation }" ng-model="user.password_confirmation" id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar contraseña" required>
                            <p ng-cloak class="error-form" ng-if="errors.password_confirmation"><% errors.password_confirmation[0] %></p>
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
