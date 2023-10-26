@if (Auth::check())
<!--<a href="{{ url('/ticket') }}" class="hero__btn-call-to-action d-none d-sm-block text-center wow slideInRight btn" data-wow-duration="1s"
    data-wow-delay="0.5s">
    <span class="mx-4 px-3">¡PARTICIPA!</span> DA CLICK AQUÍ
</a>-->
@else
<!--<a href="{{ url('/login') }}" class="hero__btn-call-to-action d-none d-sm-block text-center wow slideInRight btn" data-wow-duration="1s"
    data-wow-delay="0.5s">
    <span class="mx-4 px-3">¡PARTICIPA!</span> DA CLICK AQUÍ
</a> -->
@endif

<!--<img class="position-absolute hero__ceys-montack  wow slideInLeft" data-wow-duration="1s"
     src="{{ asset('img/images/ceys_logo.png') }}" alt="Ceys Logo">-->
<img class="position-absolute hero__ceys-silicon wow slideInLeft" data-wow-duration="1s"
     src="{{ asset('img/images/totaltech/ceys.png') }}" alt="Agarre Total">


<img class="position-absolute hero__montack-silicon wow slideInLeft" data-wow-duration="1s"
     src="{{ asset('img/images/totaltech/totaltech.png') }}" alt="Agarre Total">

<img class="position-absolute hero__ceys-productos wow slideInUp" data-wow-duration="1s"
     src="{{ asset('img/images/totaltech/ceysprod.png') }}" alt="Ceys Productos">

<img class="position-absolute hero__scooter wow slideInRight" data-wow-duration="1s"
    src="{{ asset('img/images/razor-premio - copia.png') }}" alt="Scooter">

<img class="position-absolute hero__home wow slideInRight" data-wow-duration="1s"
    src="{{ asset('img/images/totaltech/participa.png') }}" alt="Scooter">

<img class="position-absolute hero__montate wow slideInDown" data-wow-duration="1s"
    src="{{ asset('img/images/totaltech/Ceys regala ipads.png') }}" alt="Móntate con Montack">
@if (Auth::check())
<a href="{{ url('/totaltech/ticket') }}" class="position-absolute hero__button wow slideInDown"><img data-wow-duration="1s" src="{{ asset('img/images/Btn_participa.png') }}" alt="Button"></a>
@else
<a href="{{ url('/totaltech/login') }}" class="position-absolute hero__button wow slideInDown"><img data-wow-duration="1s" src="{{ asset('img/images/Btn_participa.png') }}" alt="Button"></a>
@endif

   