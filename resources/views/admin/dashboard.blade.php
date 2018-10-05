@extends('layouts.app-admin')

@section('content')
    <!-- START PAGE CONTENT-->
    <div class="page-content fade-in-up">
        <div class="row">
          {{-- Reporte Semanal --}}
          <div class="col-xl-6">
            <h1>Reporte Semanal</h1>
            <p>30 de julio al 5 de agosto</p>
          </div>
          {{-- Fin Reporte Semanal --}}
          <div class="col-xl-4">
              <div class="ibox">
                  <div class="ibox-body">
                      <div class="flexbox mb-3">
                          <span class="flexbox">
                              <span class="btn-icon-only btn-circle bg-primary-50 text-primary mr-3"><i class="ti-cup"></i></span>
                              <span>Participantes Acumulados</span>
                          </span>
                          <span class="h3 mb-0 text-primary font-strong ml-2">71</span>
                      </div>
                      <div class="flexbox mb-3">
                          <span class="flexbox">
                              <span class="btn-icon-only btn-circle bg-success-50 text-success mr-3"><i class="ti-briefcase"></i></span>
                              <span>Registros Acumulados</span>
                          </span>
                          <span class="h3 mb-0 text-success font-strong ml-2">89</span>
                      </div>
                  </div>
              </div>
          </div>
          {{-- Panel 1 --}}
            <div class="col-xl-4">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Participantes: <span>71</span></div>
                    </div>
                    <div class="ibox-body">
                        <div class="flexbox mb-3">
                            <span class="flexbox">
                                <span class="btn-icon-only btn-circle bg-primary-50 text-primary mr-3"><i class="ti-cup"></i></span>
                            </span>
                            <span class="h3 mb-0 text-primary font-strong ml-2">25</span>
                        </div>
                        <div class="flexbox mb-3">
                            <span class="flexbox">
                                <span class="btn-icon-only btn-circle bg-success-50 text-success mr-3"><i class="ti-briefcase"></i></span>
                            </span>
                            <span class="h3 mb-0 text-success font-strong ml-2">46</span>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Fin Panel 1 --}}
            {{-- Panel 2 --}}
              <div class="col-xl-4">
                  <div class="ibox">
                      <div class="ibox-head">
                          <div class="ibox-title">Top Tiendas</div>
                      </div>
                      <div class="ibox-body">
                          <div class="flexbox mb-3">
                              <ol>
                                <li>Walmart</li>
                                <li>Comercial Mexicana</li>
                                <li>HEB</li>
                                <li>HOWES</li>
                              </ol>
                          </div>
                      </div>
                  </div>
              </div>
              {{-- Fin Panel 2 --}}
              {{-- Panel 3 --}}
                <div class="col-xl-4">
                    <div class="ibox">
                        <div class="ibox-head">
                            <div class="ibox-title">Ticket de compra con mayor monto</div>
                        </div>
                        <div class="ibox-body">
                            <div class="flexbox mb-3">
                                {{-- <span class="flexbox"> --}}
                                    <span class="btn-icon-only btn-circle bg-primary-50 text-primary mr-3"><i class="ti-cup"></i></span>
                                    <span>Soriana Izatapalapa SUC. 262</span>
                                {{-- </span> --}}

                            </div>
                            <div class="flexbox mb-3" style="justify-content: center !important;">
                              <span class="h3 mb-0 text-primary font-strong ml-2">$1250</span>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Fin Panel 3 --}}
                  {{-- Reporte Semanal --}}
                  <div class="col-xl-8 coments">
                    <h1>Comentarios</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                  {{-- Fin Reporte Semanal --}}
          </div>
        </div>
    <!-- END PAGE CONTENT-->
    <footer class="page-footer">
        <div class="font-13">2018 © Total Tech</div>
        <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
    </footer>
@endsection
