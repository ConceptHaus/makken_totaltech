<div class="container py-5 participantes">
  <div class="row">
    <div class="col-xl-6 col-lg-6 col-md-6 col-12 participantes__block">
      <h2 class="participantes__h2 text-center font-italic">ESTABLECIMIENTO <br/>PARTICIPANTE</h2>
      <div class="row">
        <div class="col-12">
          <a href="https://www.homedepot.com.mx/SearchDisplay?categoryId=&storeId=10351&catalogId=10101&langId=-5&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&searchSource=Q&pageView=&beginIndex=0&pageSize=20&searchTerm=ceys#facet:&productBeginIndex:0&facetLimit:&orderBy:&pageView:grid&minPrice:&maxPrice:&pageSize:&" target="_blank">
            <img class="participantes__tiendas-img wow fadeInDown my-3" data-wow-duration="1s"
             src="{{ asset('img/logos/homedepot.png') }}" alt="Home Depot">
          </a>
        </div>
       
       
      </div>
      
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-12 text-center">
      <h2 class="participantes__h3 text-center font-italic">PREMIO</h2>
      <img class="participantes__scooter my-4 img-fluid wow zoomIn" data-wow-duration="1s" data-wow-delay="0.5s"
        src="{{ asset('img/images/premio.png') }}" alt="scooter-premio">
      <h6 class="participantes__h6">GANA UNA UN JERSEY DE LA SELECCIÓN MEXICANA</h6>
      @if (Auth::check())
      <a href="{{ url('/ticket') }}" class="btn-call-to-action my-4 text-center wow zoomIn btn" data-wow-duration="1s"
        data-wow-delay="0.5s">
        <span class="mx-4 px-3">¡PARTICIPA!</span><span class="dar_click"> DA CLICK AQUÍ</span>
      </a>
      @else
      <a href="{{ url('/login') }}" class="btn-call-to-action my-4 text-center wow zoomIn btn" data-wow-duration="1s"
        data-wow-delay="0.5s">
        <span class="mx-4 px-3">¡PARTICIPA!</span><span class="dar_click"> DA CLICK AQUÍ</span>
      </a>
      @endif
    </div>
    <div class="barra">
    </div>
  </div>
</div>