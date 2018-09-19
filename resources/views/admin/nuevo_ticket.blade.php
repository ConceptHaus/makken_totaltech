@extends('layouts.app-admin')

@section('content')
    <!-- START PAGE CONTENT-->
    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-body">
                <h5 class="font-strong mb-5">AGREGAR TICKET</h5>
                <div class="row">
                    <div class="col-lg-4 content-img-ticket">
                        <div class="text-center">
                            <img class="img-default-ticket" src="{{ asset('img/icons/camera-blue.svg') }}">
                        </div>
                        <div class="flexbox-b mt-4">
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
                                                <option ng-repeat="user in usuarios" value="<% user.id %>"><% user.email %></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-primary btn-air mr-2">Guardar</button>
                                <a class="btn btn-secondary" href="{{ url('/admin/tickets/registrados') }}">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTENT-->
    <footer class="page-footer">
        <div class="font-13">2018 © Total Tech</div>
        <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
    </footer>
@endsection