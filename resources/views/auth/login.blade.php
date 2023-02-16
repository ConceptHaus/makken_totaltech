@extends('layouts.app')

@section('content')
@php
$date = new DateTime('2019-10-21');
$now = new DateTime();
@endphp
<section class="section_home">
<div id="pageStyle" class="login container-fluid" ng-controller="userCtrl">
    <!-- <img class="login__scooter wow slideInRight" src="{{ asset('img/images/razor.png') }}" alt="scooter"> -->
    <img class="image_premio" data-wow-duration="1s" data-wow-delay="0.5s"
        src="{{ asset('img/images/premio.png') }}" alt="agarre-total" />
    <img class="image_premio_movil" data-wow-duration="1s" data-wow-delay="0.5s"
        src="{{ asset('img/images/premio.png') }}" alt="agarre-total" />
    <img class="login__ceys-montack wow slideInLeft mx-auto d-flex wow" data-wow-duration="1s" data-wow-delay="0.5s"
        src="{{ asset('img/images/ceys_logo.png') }}" alt="ceys-montack">
    <img class="login__img-montack wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5s"
        src="{{ asset('img/images/montack.png') }}" alt="subeleconmontack">
    <img class="login__img-productos wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5s"
        src="{{ asset('img/images/ceys_productos.png') }}" alt="ceysproduct">

    <img class="login__img-montante wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5s"
        src="{{ asset('img/images/montate.png') }}" alt="ceysproduct">

    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-6 col-md-6 col-10">
            <div class="panel">
                <!--<img src="{{ asset('img/images/date-satamp.svg') }}" class="panel-img img-fluid" width="200" alt="">-->
                <div class="panel-body text-center">
                    <form class="form-horizontal">
                        {{ csrf_field() }}
                        <h3>INICIAR SESIÓN</h3>
                        <div class="form-group">
                            <input ng-class="{'invalido': errors['error'] || errors['email'] }" ng-model="user.email"
                                id="email" type="email" class="form-control" name="email" placeholder="Usuario" required
                                autofocus>
                            <div ng-cloak ng-if="errors['email']" class="alert alert-warning" role="alert">
                                <% errors['email'][0] %> 
                            </div>
                        </div>

                        <div class="form-group">
                            <input ng-class="{'invalido': errors['error'] || errors['password'] }"
                                ng-model="user.password" id="password" type="password" class="form-control"
                                name="password" placeholder="Contraseña" required>
                        </div>
                        <div ng-cloak ng-if="errors['error']" class="alert alert-warning" role="alert">
                            <% errors['error'] %>
                        </div>

                        <div ng-cloak ng-if="errors['password']" class="alert alert-warning" role="alert">
                            <% errors['password'][0] %>
                        </div>
                        <div class="form-group content-actions text-center no-margin align-items-start pt-0">

                            <a class="a-forget-password" href="{{ route('password.request') }}">
                                ¿Olvidaste tu contraseña?
                            </a>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button ng-click="login(user)" class="btn btn-submit">ENTRAR</button>
                            </div>
                            <p class="my-3 text-center">¿No tienes cuenta?
                                <!-- @if($date <= $now)  -->

                                <a class="registrate" href="{{ route('register') }}">Regístrate.</a>
                                <!-- @else -->
                                <a class="disabled registrate">Regístrate.</a>
                                <!-- @endif -->
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection