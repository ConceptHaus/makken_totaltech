@extends('layouts.app')

@section('content')
<div id="pageSytyle" class="container-fluid" ng-controller="userCtrl">
    <div class="row">

        <div class="col-3 mx-0'">

            <img class="ceys-montack-login mx-auto d-flex wow " data-wow-duration="1s" data-wow-delay="0.5s"
                src="{{ asset('img/images/ceys_logo.png') }}" alt="ceys-montack">
            <img class="img-silicon-login wow " data-wow-duration="1s" data-wow-delay="0.5s"
                src="{{ asset('img/images/agarre_total.png') }}" alt="agarre-total">

        </div>
        <div class="col-md-6">
            <div class="panel panel-register my-5">
                <div class="panel-body text-center">

                    <h3>REGÍSTRATE</h3>
                    <form class="form-horizontal form-ajust">
                        {{ csrf_field() }}
                        <input ng-model="user.registro_admin" name="registro_admin" ng-init="user.registro_admin = 0"
                            type="text" hidden>
                        <input ng-model="user.admin" name="registro_admin" ng-init="user.admin = 0" type="text" hidden>
                        <div class="form-row">
                            <div class="col form-group">
                                <input ng-class="{'invalido': errors.nombre }" ng-model="user.nombre" id="name"
                                    type="text" class="form-control" name="name" placeholder="Nombre" required
                                    autofocus>
                                <p ng-cloak class="error-form" ng-if="errors.nombre"><% errors.nombre[0] %></p>

                            </div>
                            <div class="col form-group">
                                <input ng-class="{'invalido': errors.apellido }" ng-model="user.apellido" id="lastname"
                                    type="text" class="form-control" name="lastname" placeholder="Apellido" required
                                    autofocus>
                                <p ng-cloak class="error-form" ng-if="errors.apellido"><% errors.apellido[0] %></p>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col form-group">
                                <input ng-class="{'invalido': errors.telefono }" ng-model="user.telefono" id="phone"
                                    type="text" class="form-control" name="phone" mask="(99) 9999-9999"
                                    placeholder="Teléfono" required autofocus>
                                <p ng-cloak class="error-form" ng-if="errors.telefono"><% errors.telefono[0] %></p>
                            </div>
                            <div class="col form-group">
                                <input ng-class="{'invalido': errorCP }" ng-model="user.cp" id="cp" type="text"
                                    class="form-control" name="cp" ng-blur="getCP(user.cp)" placeholder="C.P."
                                    mask="999999" required autofocus>
                                <p ng-cloak class="error-form" ng-if="errorCP"><% errorCP %></p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col form-group">
                                <input ng-model="user.estado" id="estado" type="text" class="form-control" name="estado"
                                    placeholder="Estado" required autofocus disabled>
                            </div>
                            <div class="col form-group">
                                <input ng-model="user.municipio" id="municipio" type="text" class="form-control"
                                    name="municipio" placeholder="Municipio" required autofocus disabled>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col form-group">
                                <select ng-class="{'invalido': errors.colonia }"
                                    class="selectpicker form-control form-control-solid" ng-model="user.colonia"
                                    data-live-search="true" id="colonia" type="text" class="form-control" name="colonia"
                                    title="Selecciona tu colonia" required
                                    ng-options="colonia for colonia in user.coloniaArray">
                                </select>
                                <p ng-cloak class="error-form" ng-if="errors.colonia"><% errors.colonia[0] %></p>
                            </div>
                            <div class="col form-group">
                                <input ng-model="user.calle" id="calle" ng-class="{'invalido': errors.calle }"
                                    type="text" class="form-control" name="calle" placeholder="Calle y número" required
                                    autofocus>
                                <p ng-cloak class="error-form" ng-if="errors.calle"><% errors.calle[0] %></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <input ng-class="{'invalido': errors.correo }" ng-model="user.correo" id="email"
                                type="email" class="form-control" name="email" placeholder="Correo" required>
                            <p ng-cloak class="error-form" ng-if="errors.correo"><% errors.correo[0] %></p>
                        </div>

                        <div class="form-group">
                            <input ng-class="{'invalido': errors.password }" ng-model="user.password" id="password"
                                type="password" class="form-control" name="password" placeholder="Contraseña" required>
                            <p ng-cloak class="error-form" ng-if="errors.password"><% errors.password[0] %></p>
                        </div>

                        <div class="form-group">
                            <input ng-class="{'invalido': errors.password_confirmation }"
                                ng-model="user.password_confirmation" id="password-confirm" type="password"
                                class="form-control" name="password_confirmation" placeholder="Confirmar contraseña"
                                required>
                            <p ng-cloak class="error-form" ng-if="errors.password_confirmation">
                                <% errors.password_confirmation[0] %></p>
                        </div>

                        <div class="form-group">
                            <button type="submit" ng-click="register(user,confirm)"
                                class="btn btn-submit">ENTRAR</button>

                        </div>
                        <div class="mb-2">
                            <a class="a-login mb-2" href="{{ route('login') }}">Ya tengo una cuenta.</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="col-3 d-flex ml-auto">

            <img class="scooter-login" src="{{ asset('img/images/razor.png') }}" alt="scooter">

        </div>
    </div>
</div>
@endsection