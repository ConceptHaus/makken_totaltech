@extends('layouts.appTotaltech') 

@section('content')
<section class="section_home">
<div id="pageStyle" class="container" ng-controller="ForgotPasswordCtrl">
    <img class="image_premio" data-wow-duration="1s" data-wow-delay="0.5s"
    src="{{ asset('img/images/premio.png') }}" alt="agarre-total" />
    <img class="position-absolute hero__home_2 wow slideInRight" data-wow-duration="1s"
    src="{{ asset('img/images/totaltech/participa2.png') }}" alt="Scooter">
<img class="image_premio_movil" data-wow-duration="1s" data-wow-delay="0.5s"
    src="{{ asset('img/images/premio.png') }}" alt="agarre-total" />
<img class="login__ceys-montack wow slideInLeft mx-auto d-flex wow" data-wow-duration="1s" data-wow-delay="0.5s"
    src="{{ asset('img/images/totaltech/totaltech.png') }}" alt="ceys-montack">
<img class="login__img-productos wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5s"
    src="{{ asset('img/images/totaltech/ceysprod.png') }}" alt="ceysproduct">

<img class="login__img-montante wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5s"
    src="{{ asset('img/images/totaltech/Ceys regala ipads.png') }}" alt="ceysproduct">


    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-6 col-md-6 col-10">
            <div class="panel panel-default">
                <div class="panel-body text-center">
                    <form class="form-horizontal">
                        {{ csrf_field() }}
                        <h3>¿OLVIDASTE TU CONTRASEÑA?</h3>
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('correo') ? ' has-error' : '' }}">
                            <input ng-model="resetP.correo" id="correo" type="email" class="form-control" name="correo"
                                value="{{ $email or old('correo') }}" placeholder="Ingresa tu correo" required
                                autofocus>
                            @if ($errors->has('correo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('correo') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input ng-model="resetP.password" id="password" type="password" class="form-control"
                                name="password" placeholder="Contraseña" required>
                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <input ng-model="resetP.password_confirmation" id="password-confirm" type="password"
                                class="form-control" name="password_confirmation" placeholder="Confirmar contraseña"
                                required>
                            @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <button ng-click="reset(resetP)" type="submit" class="btn btn-submit">RESTABLECER</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection