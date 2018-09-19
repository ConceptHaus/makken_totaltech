@extends('layouts.app-admin')

@section('content')
    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-content fade-in-up">
            <div class="ibox">
                <div class="ibox-body">
                    <h5 class="font-strong mb-5">EDITAR ESTABLECIMIENTO</h5>
                    <div class="row">
                        <div class="col-lg-12 content-img-ticket">
                            <p>Agregar imagen que se identifique con el establecimiento (logo, fotografía).</p>
                            <div class="text-center">
                                <img class="img-default-ticket" src="{{ asset('img/logos/walmart.png') }}">
                            </div>
                            <div class="flexbox-b mt-4">
                                <div class="file-input-plus file-input"><i class="la la-plus-circle"></i>
                                    <input type="file">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <form action="javascript:;">
                                <div class="row">
                                    <div class="col-md-12 form-group mb-4">
                                        <label>Nombre</label>
                                        <input class="form-control form-control-solid" type="text" value="Walmart">
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-primary btn-air mr-2">Actualizar</button>
                                    <a class="btn btn-secondary" href="{{ url('/admin/establecimientos') }}">Cancelar</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTENT-->
        <footer class="page-footer">
            <div class="font-13">2018 © Makken & ConceptHaus</div>
            <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
        </footer>
    </div>
@endsection