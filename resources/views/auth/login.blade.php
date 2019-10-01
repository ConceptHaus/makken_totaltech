@extends('layouts.app')

@section('content')
<div id="pageSytyle" class="container" ng-controller="userCtrl">
    <div class="row">
        <div class="col-md-8 offset-md-2 mt-md-5 pt-md-5">
            <div class="panel">
                <div class="panel-body text-center">
                    <form class="form-horizontal" >
                        {{ csrf_field() }}
                        <h3>INICIAR SESIÓN</h3>
                        <div class="form-group">
                            <input ng-class="{'invalido': errors['error'] || errors['email'] }" ng-model="user.email" id="email" type="email" class="form-control" name="email" placeholder="Usuario" required autofocus>
                        </div>
                        <div class="form-group">
                            <input ng-class="{'invalido': errors['error'] || errors['password'] }" ng-model="user.password" id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>
                        </div>
                        <div ng-cloak ng-if="errors['error']" class="alert alert-warning" role="alert">
                            <% errors['error'] %>
                        </div>
                        <div ng-cloak ng-if="errors['email']" class="alert alert-warning" role="alert">
                            <% errors['email'][0] %>
                        </div>
                        <div ng-cloak ng-if="errors['password']" class="alert alert-warning" role="alert">
                            <% errors['password'][0] %>
                        </div>
                        <div class="form-group content-actions">
                            <p>¿No tienes cuenta? <a class="" href="{{ route('register') }}">Regístrate.</a></p>
                            <a class="a-forget-password" href="{{ route('password.request') }}">
                                ¿Olvidaste tu contraseña?
                            </a>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button ng-click="login(user)" class="btn btn-submit">ENTRAR</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <img class="img-silicon-login wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5s" src="{{ asset('img/images/pega-sella-repara.png') }}" alt="Silicón">
</div>
@endsection
