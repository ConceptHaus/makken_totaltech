@extends('layouts.app-admin')

@section('content')
    <!-- START PAGE CONTENT-->
    <div class="page-content fade-in-up">
        <div class="row">
          {{-- Reporte Semanal --}}
          <div class="col-xl-4">
            <h1>Reporte Semanal</h1>
            <p>30 de julio al 5 de agosto</p>
          </div>
          {{-- Fin Reporte Semanal --}}
          {{-- Participantes --}}
          <div class="col-xl-4">
              <div class="ibox">
                  <div class="ibox-body">
                      <div class="flexbox mb-3">
                          <span class="flexbox">
                              <span>Participantes Acumulados</span>
                          </span>
                          <span class="h3 mb-0 text-blue-total font-strong ml-2">71</span>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xl-4">
              <div class="ibox">
                  <div class="ibox-body">
                      <div class="flexbox mb-3">
                          <span class="flexbox">
                              <span>Registros Acumulados</span>
                          </span>
                          <span class="h3 mb-0 text-blue-total font-strong ml-2">89</span>
                      </div>
                  </div>
              </div>
          </div>
          {{-- Fin de Participantes --}}
        </div>
        <div class="row">
          {{-- Top Tiendas --}}
            <div class="col-xl-4">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">TOP TIENDAS</div>
                    </div>
                    <div class="ibox-body">
                      <ul class="list-group list-group-divider list-group-full">
                          <li class="list-group-item flexbox">
                              <span class="mr-3"><img src="{{asset('img/logos/lacomer.png')}}" width="70">Comercial Mexicana</span>
                              <span class="mb-0 ml-2">25</span>
                          </li>
                          <li class="list-group-item flexbox">
                              <span class="mr-3"><img src="{{asset('img/logos/casacravioto.png')}}" width="70">Casa Cravioto</span>
                              <span class="mb-0 ml-2">25</span>
                          </li>
                          <li class="list-group-item flexbox">
                              <span class="mr-3"><img src="{{asset('img/logos/chedraui.png')}}" width="70">Chedraui</span>
                              <span class="mb-0 ml-2">25</span>
                          </li>
                          <li class="list-group-item flexbox">
                              <span class="mr-3"><img src="{{asset('img/logos/heb.png')}}" width="70">HEB</span>
                              <span class="mb-0 ml-2">25</span>
                          </li>
                          <li class="list-group-item flexbox">
                              <span class="mr-3"><img src="{{asset('img/logos/lowes.png')}}" width="70">LOWES</span>
                              <span class="mb-0 ml-2">25</span>
                          </li>
                      </ul>
                    </div>
                </div>
            </div>
            {{-- Fin Top Tiendas --}}
          {{-- Panel 1 --}}
            <div class="col-xl-4">
              <div class="ibox">
                  <div class="ibox-head">
                      <div class="ibox-title">REGISTROS</div>
                  </div>
                  <div class="ibox-body">
                    <ul class="list-group list-group-divider list-group-full">
                        <li class="list-group-item flexbox">
                            <span class="mr-3"><img src="{{asset('img/icons/whatsapp.svg')}}" width="40"><span class="ml-3">Total</span></span>
                            <span class="mb-0 ml-2">71</span>
                        </li>
                        <li class="list-group-item flexbox">
                            <span class="mr-3"><img src="{{asset('img/icons/whatsapp.svg')}}" width="40"><span class="ml-3">WhatsApp</span></span>
                            <span class="mb-0 ml-2">25</span>
                        </li>
                        <li class="list-group-item flexbox">
                            <span class="mr-3"><img src="{{asset('img/icons/register.svg')}}" width="40"><span class="ml-3">Registros</span></span>
                            <span class="mb-0 ml-2">46</span>
                        </li>
                    </ul>
                  </div>
              </div>
            </div>

            <div class="col-xl-4">
              <div class="ibox">
                  <div class="ibox-head">
                      <div class="ibox-title">Ticket de compra con mayor monto</div>
                  </div>
                  <div class="ibox-body">
                      <div class="mb-3">
                          <span class="btn-icon-only btn-circle bg-primary-50 text-primary mr-3"><i class="ti-cup"></i></span>
                          <div style="float:right;" class="h1 mb-0 ml-2">$1250</div>
                          <div style="float:right;">Soriana Izatapalapa SUC. 262</div>
                      </div>
                  </div>
              </div>
            </div>
            {{-- Fin Panel 1 --}}
              {{-- Panel 3 --}}
                {{-- <div class="col-xl-4">
                  <div class="ibox">
                    <div class="ibox-head">
                      <div class="ibox-title">COMENTARIOS</div>
                    </div>
                    <div class="ibox-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                  </div> --}}
          </div>
        </div>
    <!-- END PAGE CONTENT-->
    <footer class="page-footer">
        <div class="font-13">2018 © Total Tech</div>
        <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
    </footer>
@endsection
