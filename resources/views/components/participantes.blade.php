<div class="container py-5 participantes">
  <div class="row">
    <div class="col-xl-6 col-lg-6 col-md-6 col-12 participantes__block">
      <h2 class="participantes__h2 text-center">ESTABLECIMIENTOS PARTICIPANTES</h2>
      <div class="row">
        <div class="col-6">
          <img class="participantes__tiendas-img wow fadeInDown my-3" data-wow-offset="130" data-wow-duration="1s"
            data-wow-delay="0.5s" src="{{ asset('img/logos/walmart.png') }}" alt="Walmart">
        </div>
        <div class="col-6">
          <img class="participantes__tiendas-img wow fadeInDown my-3" data-wow-offset="130" data-wow-duration="1s"
            data-wow-delay="0.5s" src="{{ asset('img/logos/soriana.png') }}" alt="Soriana">
        </div>
        <div class="col-6">
          <img class="participantes__tiendas-img wow fadeInDown my-3" data-wow-offset="130" data-wow-duration="1s"
            data-wow-delay="0.5s" src="{{ asset('img/logos/lacomer.png') }}" alt="La comer">
        </div>
        <div class="col-6">
          <img class="participantes__tiendas-img wow fadeInDown my-3" data-wow-offset="130" data-wow-duration="1s"
            data-wow-delay="0.5s" src="{{ asset('img/logos/casacravioto.png') }}" alt="Casa Cravioto">
        </div>
        <div class="col-6">
          <img class="participantes__tiendas-img wow fadeInDown my-3" data-wow-offset="130" data-wow-duration="1s"
            data-wow-delay="0.5s" src="{{ asset('img/logos/heb.png') }}" alt="HEB">
        </div>
        <div class="col-6">
          <img class="participantes__tiendas-img wow fadeInDown my-3" data-wow-offset="130" data-wow-duration="1s"
            data-wow-delay="0.5s" src="{{ asset('img/logos/lowes.png') }}" alt="Lowe's">
        </div>
        <div class="col-6">
          <img class="participantes__tiendas-img wow fadeInDown my-3" data-wow-offset="130" data-wow-duration="1s"
            data-wow-delay="0.5s" src="{{ asset('img/logos/homedepot.png') }}" alt="Home Depot">
        </div>
        <div class="col-6">
          <img class="participantes__tiendas-img wow fadeInDown my-3" data-wow-offset="130" data-wow-duration="1s"
            data-wow-delay="0.5s" src="{{ asset('img/logos/chedraui.png') }}" alt="Chedraui">
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-12 text-center">
      <h2 class="participantes__h2 text-center">PREMIO</h2>
      <img class="participantes__scooter my-4 img-fluid wow zoomIn" data-wow-offset="130" data-wow-duration="1s" data-wow-delay="0.5s"
        src="{{ asset('img/images/razor-premio.png') }}" alt="scooter-premio">
      <h6 class="participantes__h6">GANA UN SCOOTER ELÉCTRICO</h6>
      @if (Auth::check())
      <a href="{{ url('/ticket') }}" class="btn-call-to-action my-4 text-center wow zoomIn btn" data-wow-duration="1s"
        data-wow-delay="0.5s">
        <span class="mx-4 px-3">¡PARTICIPA!</span> DA CLICK AQUÍ
      </a>
      @else
      <a href="{{ url('/login') }}" class="btn-call-to-action my-4 text-center wow zoomIn btn" data-wow-duration="1s"
        data-wow-delay="0.5s">
        <span class="mx-4 px-3">¡PARTICIPA!</span> DA CLICK AQUÍ
      </a>
      @endif
    </div>
  </div>
</div>