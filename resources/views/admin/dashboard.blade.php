@extends('layouts.app-admin')

@section('content')
    <!-- START PAGE CONTENT-->
    <div class="page-content fade-in-up">
        <div class="row">
          <div class="col-xl-6">
            <h1>Reporte Semanal</h1>
            <p>30 de julio al 5 de agosto</p>
          </div>
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
                                <span>BUSINESS PLAN</span>
                            </span>
                            <span class="h3 mb-0 text-success font-strong ml-2">+890</span>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Fin Panel 1 --}}
            {{-- Panel 2 --}}
              <div class="col-xl-4">
                  <div class="ibox ibox-fullheight" style="min-height:480px;">
                      <div class="ibox-head">
                          <div class="ibox-title">SUBSCRIPTIONS</div>
                          <div class="ibox-tools">
                              <a class="font-18" href="javascript:;"><i class="ti-control-record"></i></a>
                          </div>
                      </div>
                      <div class="ibox-body">
                          <div class="flexbox mb-3">
                              <span class="flexbox">
                                  <span class="btn-icon-only btn-circle bg-primary-50 text-primary mr-3"><i class="ti-cup"></i></span>
                                  <span>BASIC PLAN</span>
                              </span>
                              <span class="h3 mb-0 text-primary font-strong ml-2">+1250</span>
                          </div>
                          <div class="flexbox mb-3">
                              <span class="flexbox">
                                  <span class="btn-icon-only btn-circle bg-success-50 text-success mr-3"><i class="ti-briefcase"></i></span>
                                  <span>BUSINESS PLAN</span>
                              </span>
                              <span class="h3 mb-0 text-success font-strong ml-2">+890</span>
                          </div>
                          <div class="flexbox mb-3">
                              <span class="flexbox">
                                  <span class="btn-icon-only btn-circle bg-pink-50 text-pink mr-3"><i class="ti-gift"></i></span>
                                  <span>EXPANDED PLAN</span>
                              </span>
                              <span class="h3 mb-0 text-pink font-strong ml-2">+720</span>
                          </div>
                          <div class="abs-bottom">
                              <canvas id="chart_1" style="height:220px;"></canvas>
                          </div>
                      </div>
                  </div>
              </div>
              {{-- Fin Panel 2 --}}
              {{-- Panel 3 --}}
                <div class="col-xl-4">
                    <div class="ibox ibox-fullheight" style="min-height:480px;">
                        <div class="ibox-head">
                            <div class="ibox-title">SUBSCRIPTIONS</div>
                            <div class="ibox-tools">
                                <a class="font-18" href="javascript:;"><i class="ti-control-record"></i></a>
                            </div>
                        </div>
                        <div class="ibox-body">
                            <div class="flexbox mb-3">
                                <span class="flexbox">
                                    <span class="btn-icon-only btn-circle bg-primary-50 text-primary mr-3"><i class="ti-cup"></i></span>
                                    <span>BASIC PLAN</span>
                                </span>
                                <span class="h3 mb-0 text-primary font-strong ml-2">+1250</span>
                            </div>
                            <div class="flexbox mb-3">
                                <span class="flexbox">
                                    <span class="btn-icon-only btn-circle bg-success-50 text-success mr-3"><i class="ti-briefcase"></i></span>
                                    <span>BUSINESS PLAN</span>
                                </span>
                                <span class="h3 mb-0 text-success font-strong ml-2">+890</span>
                            </div>
                            <div class="flexbox mb-3">
                                <span class="flexbox">
                                    <span class="btn-icon-only btn-circle bg-pink-50 text-pink mr-3"><i class="ti-gift"></i></span>
                                    <span>EXPANDED PLAN</span>
                                </span>
                                <span class="h3 mb-0 text-pink font-strong ml-2">+720</span>
                            </div>
                            <div class="abs-bottom">
                                <canvas id="chart_1" style="height:220px;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Fin Panel 3 --}}
          </div>
        </div>
    <!-- END PAGE CONTENT-->
    <footer class="page-footer">
        <div class="font-13">2018 © Total Tech</div>
        <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
    </footer>
@endsection
