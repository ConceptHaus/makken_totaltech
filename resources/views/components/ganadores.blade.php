<div class="container-fluid ganadores">
  <div class="row text-center justify-content-center">

    <div class="col-12 mt-5 wow fadeInUp" data-wow-offset="120" data-wow-duration="1s" data-wow-delay="0.5s">
      <h1 class="ganadores_title">Ganadores</h1>
    </div>
    <div class="col-12  mt-2">
      <ul class="nav nav-tabs justify-content-center" id="ganadoresTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="semana1-tab" data-scroll-ignore data-toggle="tab" href="#semana1" role="tab"
            aria-controls="semana1" aria-selected="true">SEMANA 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="semana2-tab" data-scroll-ignore data-toggle="tab" href="#semana2" role="tab"
            aria-controls="semana2" aria-selected="false">SEMANA 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="semana3-tab" data-scroll-ignore data-toggle="tab" href="#semana3" role="tab"
            aria-controls="semana3" aria-selected="false">SEMANA 3</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="semana4-tab" data-scroll-ignore data-toggle="tab" href="#semana4" role="tab"
            aria-controls="semana4" aria-selected="false">SEMANA 4</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="semana5-tab" data-scroll-ignore data-toggle="tab" href="#semana5" role="tab"
            aria-controls="semana5" aria-selected="false">SEMANA 5</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="semana6-tab" data-scroll-ignore data-toggle="tab" href="#semana6" role="tab"
            aria-controls="semana6" aria-selected="false">SEMANA 6</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="semana7-tab" data-scroll-ignore data-toggle="tab" href="#semana7" role="tab"
            aria-controls="semana7" aria-selected="false">SEMANA 7</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="semana7-tab" data-scroll-ignore data-toggle="tab" href="#semana8" role="tab"
            aria-controls="semana7" aria-selected="false">SEMANA 8</a>
        </li>

      </ul>
      <div class="tab-content" id="ganadoresTabContent">
        @for ($i=1; $i <= 8; $i++) <div class="tab-pane fade show" ng-class="{ 'active': {{$i}} == 1 }"
          id="semana{{$i}}" role="tabpanel" aria-labelledby="semana{{$i}}-tab">
          <div class="row justify-content-center">
            <div class="col-12 content-table">
              <table class="table table-borderless table-responsive table-ganadores-home justify-content-center">
                <thead>
                  <tr>
                    <th scope="col" width="25%">FECHA</th>
                    <th scope="col" width="25%">NOMBRE</th>
                    <th scope="col" width="25%">TIENDA</th>
                    <th scope="col" width="25%">PREMIO</th>
                  </tr>
                </thead>
                <tbody class="tabla-resp">
                  @php
                  $j = 0
                  @endphp
                  @foreach ($ganadores as $ganador)
                  @if ($ganador->id_semana == $i)
                  <tr>
                    <td>{{$ganador->dia}}</td>
                    <td>{{ $ganador['user']->nombre }} {{ $ganador['user']->apellido }}</td>
                    <td>{{ $ganador['user']->tickets[0]->establecimiento->nombre}}</td>
                    <td>{{ $ganador['premio']->nombre }}</td>
                  </tr>
                  @php
                  $j++
                  @endphp
                  @endif
                  @endforeach
                </tbody>
              </table>
              @if ($j == 0)
              <h2 class="azul">No hay ganadores</h2>
              @endif
            </div>
          </div>
      </div>
      @endfor
    </div>
  </div>
</div>