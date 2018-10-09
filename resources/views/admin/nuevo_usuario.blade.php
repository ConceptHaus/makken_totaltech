@extends('layouts.app-admin')

@section('content')
    <!-- START PAGE CONTENT-->
    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-body">
                <h5 class="font-strong mb-5">AGREGAR USUARIO</h5>
                <div class="row">
                    <div class="col-lg-12">
                        <form>
                            {{ csrf_field() }}
                            <input ng-model="user.registro_admin" class="form-control form-control-solid" name="registro_admin" ng-init="user.registro_admin = 1" type="text" hidden>
                            <input ng-model="user.admin" name="registro_admin" ng-init="user.admin = 1" type="text" hidden>
                            <div class="row">
                                <div class="col-md-6 form-group mb-4">
                                    <label>Nombre</label>
                                    <input ng-model="user.nombre" class="form-control form-control-solid" name="nombre" type="text" placeholder="">
                                </div>
                                <div class="col-md-6 form-group mb-4">
                                    <label>Apellido</label>
                                    <input ng-model="user.apellido" class="form-control form-control-solid" name="apellido" type="text" placeholder="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group mb-4">
                                    <label>Teléfono</label>
                                    <input ng-model="user.telefono" class="form-control form-control-solid" name="telefono" type="text" mask="(99) 9999-9999" placeholder="">
                                </div>
                                <div class="col-md-6 form-group mb-4">
                                    <label>C.P.</label>
                                    <input ng-model="user.cp" ng-class="{'invalido': errorCP }" id="cp" type="text" class="form-control form-control-solid" name="cp" ng-blur="getCP(user.cp)" placeholder="C.P." required autofocus>
                                    <p ng-cloak class="error-form" ng-if="errorCP"><% errorCP %></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group mb-4">
                                    <label>Estado</label>
                                    <input ng-model="user.estado" id="estado" type="text" class="form-control form-control-solid" name="estado"  placeholder="Estado" required autofocus disabled>
                                </div>
                                <div class="col-md-6 form-group mb-4">
                                    <label>Municipio</label>
                                    <input ng-model="user.municipio" id="municipio" type="text" class="form-control form-control-solid" name="municipio"  placeholder="Municipio" required autofocus disabled>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group mb-4">
                                    <label>Correo</label>
                                    <input ng-model="user.correo" class="form-control form-control-solid" name="correo" type="text" placeholder="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group mb-4">
                                    <label>Contraseña</label>
                                    <input ng-model="user.password" class="form-control form-control-solid" name="password" type="password" placeholder="">
                                </div>
                                <div class="col-md-6 form-group mb-4">
                                    <label>Confirmar Contraseña</label>
                                    <input ng-model="user.password_confirmation" class="form-control form-control-solid" name="password_confirmation" type="password" placeholder="">
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary btn-air mr-2" ng-click="register(user,confirm)">Guardar</button>
                                <a class="btn btn-secondary" href="{{ url('/admin/usuarios/registrados') }}">Cancelar</a>
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
