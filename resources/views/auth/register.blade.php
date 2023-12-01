@extends('layouts.app')

@section('content')
<section class="section_home">
<div id="pageStyle" class="login container-fluid" ng-controller="userCtrl">
    <!-- <img class="login__scooter" src="{{ asset('img/images/razor.png') }}" alt="scooter"> -->
    <img class="position-absolute hero__montate wow slideInDown movil-hide" data-wow-duration="1s" 
    src="{{ asset('img/images/montate.png') }}" alt="Móntate con Montack">
    <img class="position-absolute hero__home wow slideInRight movil-hide" data-wow-duration="1s" 
    src="{{ asset('img/images/participa.png') }}" alt="Scooter">
    <img class="image_premio" data-wow-duration="1s" data-wow-delay="0.5s"
    src="{{ asset('img/images/premio.png') }}" alt="agarre-total" />
<img class="image_premio_movil" data-wow-duration="1s" data-wow-delay="0.5s"
    src="{{ asset('img/images/premio.png') }}" alt="agarre-total" />
<img class="login__ceys-montack wow slideInLeft mx-auto d-flex wow" data-wow-duration="1s" data-wow-delay="0.5s"
    src="{{ asset('img/images/montackinmmediate.png') }}" alt="ceys-montack">
<img class="login__img-montack wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5s"
    src="{{ asset('img/images/montack.png') }}" alt="subeleconmontack">
<img class="login__img-productos wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5s"
    src="{{ asset('img/images/cintal.png') }}" alt="ceysproduct">
<img class="position-absolute hero__home_participa wow slideInRight" data-wow-duration="1s" src="{{ asset('img/images/participa.png') }}" alt="Scooter">
<img class="login__img-montante wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5s"
    src="{{ asset('img/images/participa-2.png') }}" alt="ceysproduct">
    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-6 col-md-6 col-10">
            <div class="panel panel-register">
                <div class="panel-body text-center">
                    <h3>REGÍSTRATE</h3>
                    <p class="text-center">¡La promoción a llegado a su fin!</p>
                    <!--<form class="form-horizontal form-ajust">
                        {{ csrf_field() }}
                        <input ng-model="user.registro_admin" name="registro_admin" ng-init="user.registro_admin = 0"
                            type="text" hidden>
                        <input ng-model="user.id_promo" name="id_promo" ng-init="user.id_promo = 1"
                            type="text" hidden>    
                        <input ng-model="user.admin" name="registro_admin" ng-init="user.admin = 0" type="text" hidden>
                        <div class="form-row">
                            <div class="col form-group">
                                <input ng-class="{'invalido': errors.nombre }" ng-model="user.nombre" id="name"
                                    type="text" class="form-control" name="name" placeholder="Nombre" required
                                    autofocus >
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
                        <!- - Campo oculto - ->
                        
                        <div class="mb-2">
                            <a class="a-login mb-2" href="{{ route('login') }}">Ya tengo una cuenta.</a>
                        </div>
-->
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
</section>
@endsection