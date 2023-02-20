@if (Auth::check())
<!--<a href="{{ url('/ticket') }}" class="hero__btn-call-to-action d-none d-sm-block text-center wow slideInRight btn" data-wow-duration="1s"
    data-wow-delay="0.5s">
    <span class="mx-4 px-3">¡PARTICIPA!</span> DA CLICK AQUÍ
</a>-->
@else
<a href="https://wa.me/message/YZK2YHVJRSY7L1" target="_blank" class="hero__btn-call-to-action d-none d-sm-block text-center wow slideInRight btn" data-wow-duration="1s"
    data-wow-delay="0.5s">
    <span class="mx-4 px-3">¡PARTICIPA!</span> DA CLICK AQUÍ
</a> 
@endif

<!--<img class="position-absolute hero__ceys-montack  wow slideInLeft" data-wow-duration="1s"
     src="{{ asset('img/images/ceys_logo.png') }}" alt="Ceys Logo">-->
<img class="position-absolute hero__ceys-silicon wow slideInLeft" data-wow-duration="1s"
     src="{{ asset('img/images/ceys_logo.png') }}" alt="Agarre Total">


<img class="position-absolute hero__montack-silicon wow slideInLeft" data-wow-duration="1s"
     src="{{ asset('img/images/tarjeta/tedatodo.png') }}" alt="Agarre Total">

<img class="position-absolute hero__ceys-productos wow slideInUp" data-wow-duration="1s"
     src="{{ asset('img/images/tarjeta/triaccion.png') }}" alt="Ceys Productos">

<img class="position-absolute hero__scooter wow slideInRight" data-wow-duration="1s"
    src="{{ asset('img/images/tarjeta/trajeta.png') }}" alt="Scooter">


<img class="position-absolute hero__montate wow slideInDown" data-wow-duration="1s"
    src="{{ asset('img/images/tarjeta/Gana un vale.png') }}" alt="Móntate con Montack">