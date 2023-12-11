@extends('layouts.appTotaltech')

@section('content')
@php
$date = new DateTime('2019-10-21');
$now = new DateTime();
@endphp
<section class="section_home">
<div id="pageStyle" class="login container-fluid" ng-controller="userCtrl" ng-model="id_promo"  ng-init="id_promo = '2'">
    <!-- <img class="login__scooter wow slideInRight" src="{{ asset('img/images/razor.png') }}" alt="scooter"> -->
    <img class="image_premio" data-wow-duration="1s" data-wow-delay="0.5s"
        src="{{ asset('img/images/premio.png') }}" alt="agarre-total" />
        <img class="position-absolute hero__home wow slideInRight" data-wow-duration="1s"
        src="{{ asset('img/images/totaltech/participa.png') }}" alt="Scooter">
    <img class="image_premio_movil" data-wow-duration="1s" data-wow-delay="0.5s"
        src="{{ asset('img/images/premio.png') }}" alt="agarre-total" />
    <img class="login__ceys-montack wow slideInLeft mx-auto d-flex wow" data-wow-duration="1s" data-wow-delay="0.5s"
        src="{{ asset('img/images/totaltech/ceys.png') }}" alt="ceys-montack">
    <img class="login__img-montack wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5s"
        src="{{ asset('img/images/totaltech/totaltech.png') }}" alt="subeleconmontack">
    <img class="login__img-productos wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5s"
        src="{{ asset('img/images/totaltech/ceysprod.png') }}" alt="ceysproduct">

    <img class="login__img-montante wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5s"
        src="{{ asset('img/images/totaltech/Ceys regala ipads.png') }}" alt="ceysproduct">

    
    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-6 col-md-6 col-10">
            <div class="panel">
                <!--<img src="{{ asset('img/images/date-satamp.svg') }}" class="panel-img img-fluid" width="200" alt="">-->
                <div class="panel-body text-center">
                    <form class="form-horizontal">
                        {{ csrf_field() }}
                        <h3>INICIAR SESIÓN</h3>
                        <p class="text-center">¡La promoción ya termino!</p>
                        
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection