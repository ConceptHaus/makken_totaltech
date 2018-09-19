@extends('layouts.app-admin')

@section('content')
    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-content fade-in-up">
            <div class="ibox">
                <div class="ibox-body">
                    <h5 class="font-strong mb-5">AGREGAR TICKET</h5>
                    <div class="row">
                        <div class="col-lg-4">
                            <div>
                                <img src="{{ asset('img/elements/ticket-default.jpg') }}">
                            </div>
                            <div class="flexbox-b mt-4">
                                {{-- <div class="mr-2">
                                    <img src="./assets/img/products/28.jpg" alt="image" />
                                </div>
                                <div class="mr-2">
                                    <img src="./assets/img/products/29.jpg" alt="image" />
                                </div>
                                <div class="mr-2">
                                    <img src="./assets/img/products/30.jpg" alt="image" />
                                </div> --}}
                                <div class="file-input-plus file-input"><i class="la la-plus-circle"></i>
                                    <input type="file">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <form action="javascript:;">
                                <div class="row">
                                    <div class="col-sm-6 form-group mb-4">
                                        <label>No. de Ticket</label>
                                        <input class="form-control form-control-solid" type="text" placeholder="Introduce tu número de ticket">
                                    </div>
                                    <div class="col-sm-6 form-group mb-4">
                                        <label>Monto</label>
                                        <input class="form-control form-control-solid" type="text" placeholder="$0.00">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 form-group mb-4">
                                        <label>Establecimientos</label>
                                        <div>
                                            <select class="selectpicker show-tick form-control" title="Selecciona establecimiento de compra"
                                                data-style="btn-solid">
                                                    <option>Walmart</option>
                                                    <option>Soriana</option>
                                                    <option>laComer</option>
                                                    <option>Casa Gravioto</option>
                                                    <option>H-E-B</option>
                                                    <option>Lowe´s</option>
                                                    <option>The Home Depot</option>
                                                    <option>Chedraui</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 form-group mb-4">
                                        <label>Usuarios</label>
                                        <div>
                                            <select class="selectpicker show-tick form-control" title="Selecciona el usuario de compra"
                                                data-style="btn-solid">
                                                    <option>Walmart</option>
                                                    <option>Soriana</option>
                                                    <option>laComer</option>
                                                    <option>Casa Gravioto</option>
                                                    <option>H-E-B</option>
                                                    <option>Lowe´s</option>
                                                    <option>The Home Depot</option>
                                                    <option>Chedraui</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-primary btn-air mr-2">Guardar</button>
                                    <button class="btn btn-secondary">Cancelar</button>
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