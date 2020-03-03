@extends('layouts.app')

@section('content')
@php
$date = new DateTime('2019-10-21');
$now = new DateTime();
@endphp
<div id="pageSytyle" class="container-fluid" ng-controller="userCtrl">



    <div class="row">
        <div class="col-3 mx-0'">

            <img class="ceys-montack-login mx-auto d-flex wow " data-wow-duration="1s" data-wow-delay="0.5s"
                src="{{ asset('img/images/ceys_logo.png') }}" alt="ceys-montack">
            <img class="img-silicon-login wow " data-wow-duration="1s" data-wow-delay="0.5s"
                src="{{ asset('img/images/agarre_total.png') }}" alt="agarre-total">

        </div>
        <div class="col-md-6  pt-md-5 px-md-5">

            <div class="panel my-4">
                <div class="panel-body text-center">
                    <form class="form-horizontal">
                        {{ csrf_field() }}
                        <h3>INICIAR SESIÓN</h3>
                        <div class="form-group">
                            <input ng-class="{'invalido': errors['error'] || errors['email'] }" ng-model="user.email"
                                id="email" type="email" class="form-control" name="email" placeholder="Usuario" required
                                autofocus>
                            <div ng-cloak ng-if="errors['email']" class="alert alert-warning" role="alert">
                                <!-- <% errors['email'][0] %> -->
                            </div>
                        </div>

                        <div class="form-group">
                            <input ng-class="{'invalido': errors['error'] || errors['password'] }"
                                ng-model="user.password" id="password" type="password" class="form-control"
                                name="password" placeholder="Contraseña" required>
                        </div>
                        <div ng-cloak ng-if="errors['error']" class="alert alert-warning" role="alert">
                            <!-- <% errors['error'] %> -->
                        </div>

                        <div ng-cloak ng-if="errors['password']" class="alert alert-warning" role="alert">
                            <!-- <% errors['password'][0] %> -->
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
    <div class="col-3 d-flex ml-auto">
        
            <img class="scooter-login"  src="{{ asset('img/images/razor.png') }}" alt="scooter">
        
    </div>
    </div>
</div>
@endsection