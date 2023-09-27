@extends('layouts.app')

@section('content')
<section class="section_home">
<div id="pageStyle" class="container" ng-controller="ForgotPasswordCtrl">
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

    <img class="login__img-montante wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5s"
        src="{{ asset('img/images/montate.png') }}" alt="ceysproduct">
    <span class="position-absolute hero__vigencia_style wow slideInDown"> <strong>Promoción válida del 2 de octubre al 26 de noviembre <br> Registra tus compras y conoce las bases de la promoción en ganaconceys.com.mx </strong></span>
    <img class="position-absolute hero__home_participa wow slideInRight" data-wow-duration="1s" src="{{ asset('img/images/participa.png') }}" alt="Scooter">
    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-6 col-md-6 col-10">
            <div class="panel panel-forget">
                <div class="panel-body text-center">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form class="form-horizontal form-ajust">
                        {{ csrf_field() }}
                        <h3>¿OLVIDASTE TU CONTRASEÑA?</h3>
                        <div class="form-group{{ $errors->has('correo') ? ' has-error' : '' }}">
                            <input ng-model="correo.correo" id="correo" type="email" class="form-control" name="correo"
                                value="{{ old('correo') }}" placeholder="Ingresa tu correo" required>
                            @if ($errors->has('correo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('correo') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <button type="submit" ng-click="forgot2(correo)" class="btn btn-submit">RECUPERAR</button>
                        </div>

                        <div class="form-group content-actions">
                            <a class="a-forget-password" href="{{ route('login') }}">Regresar a iniciar sesión.</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <img class="img-silicon-login wow slideInLeft d-none" data-wow-duration="1s" data-wow-delay="0.5s"
        src="{{ asset('img/images/pega-sella-repara.png') }}" alt="Silicón">
</div>
</section>
@endsection