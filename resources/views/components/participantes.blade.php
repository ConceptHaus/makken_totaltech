<div class="container py-5 participantes">
  <div class="row">
    <div class="col-xl-6 col-lg-6 col-md-6 col-12 participantes__block">
      <h2 class="participantes__h2 text-center font-italic">ESTABLECIMIENTOS <br/>PARTICIPANTES</h2>
      <div class="row">
        <div class="col-6">
          <a href=https://super.walmart.com.mx/productos?Ntt=ceys" target="_blank">
            <img class="participantes__tiendas-img wow fadeInDown my-3" data-wow-duration="1s"
             src="{{ asset('img/logos/walmart.png') }}" alt="Home Depot">
          </a>
        </div>
        <div class="col-6">
          <a href="" target="_blank">
            <img class="participantes__tiendas-img wow fadeInDown my-3" data-wow-duration="1s"
             src="{{ asset('img/logos/soriana.png') }}" alt="Home Depot">
          </a>
        </div>
        <div class="col-6">
          <a href="https://www.lacomer.com.mx/lacomer/goBusqueda.action?succId=14&ver=mislistas&succFmt=100&criterio=ceys#/ceys" target="_blank">
            <img class="participantes__tiendas-img wow fadeInDown my-3" data-wow-duration="1s"
             src="{{ asset('img/logos/LaComer-2.png') }}" alt="Home Depot">
          </a>
        </div>
        <div class="col-6">
          
            <a href="https://casacraviotoeshop.com/catalogsearch/result/?q=ceys" target="_blank">
              <img class="participantes__tiendas-img wow fadeInDown my-3" data-wow-duration="1s"
              src="{{ asset('img/logos/casacravioto.png') }}" alt="Home Depot">
          </a>
        </div>
        <div class="col-6">
          <a href="" target="_blank">
            <img class="participantes__tiendas-img wow fadeInDown my-3" data-wow-duration="1s"
             src="{{ asset('img/logos/heb.png') }}" alt="Home Depot">
          </a>
        </div>
        <div class="col-6">
          <a href="https://www.sodimac.com.mx/sodimac-mx/search/?Ntt=ceys" target="_blank">
            <img class="participantes__tiendas-img wow fadeInDown my-3" data-wow-duration="1s"
             src="{{ asset('img/logos/sodimac2.png') }}" alt="Home Depot">
          </a>
        </div>
        <div class="col-4"></div>
        <div class="col-4">
          <a href="https://www.chedraui.com.mx/search?text=ceys" target="_blank">
          <img class="participantes__tiendas-img wow fadeInDown my-3" data-wow-duration="1s"
            src="{{ asset('img/logos/chedraui2.png') }}" alt="Home Depot">
           
          </a>
        </div>
        
       
       
      </div>
      
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-12 text-center">
      <h2 class="participantes__h3 text-center font-italic">PREMIO</h2>
      <img class="participantes__scooter my-4 img-fluid wow zoomIn" data-wow-duration="1s" data-wow-delay="0.5s"
        src="{{ asset('img/images/premio.png') }}" alt="scooter-premio">
      <h6 class="participantes__h6">GANA UNA IPAD </h6>
      @if (Auth::check())
      <a href="{{ url('/ticket') }}" class="btn-call-to-action my-4 text-center wow zoomIn btn" data-wow-duration="1s"
        data-wow-delay="0.5s">
        <span class="mx-4 px-3">¡PARTICIPA!</span><span class="dar_click"> DA CLICK AQUÍ</span>
      </a>
      @else
      <a href="{{ url('/montack/login') }}" class="btn-call-to-action my-4 text-center wow zoomIn btn" data-wow-duration="1s"
        data-wow-delay="0.5s">
        <span class="mx-4 px-3">¡PARTICIPA!</span><span class="dar_click"> DA CLICK AQUÍ</span>
      </a>
      @endif
    </div>
    <div class="barra">
    </div>
  </div>
</div>