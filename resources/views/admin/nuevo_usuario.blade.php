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
                        <input ng-model="user.registro_admin" class="form-control form-control-solid"
                            name="registro_admin" ng-init="user.registro_admin = 1" type="text" hidden>
                        <input ng-model="user.admin" name="registro_admin" ng-init="user.admin = 1" type="text" hidden>
                        <div class="row">
                            <div class="col-md-6 form-group mb-4">
                                <label>Nombre</label>
                                <input ng-model="user.nombre" class="form-control form-control-solid" name="nombre"
                                    type="text" >
                            </div>
                            <div class="col-md-6 form-group mb-4">
                                <label>Apellido</label>
                                <input ng-model="user.apellido" class="form-control form-control-solid" name="apellido"
                                    type="text" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group mb-4">
                                <label>Teléfono</label>
                                <input ng-model="user.telefono" class="form-control form-control-solid" name="telefono"
                                    type="text" mask="(99) 9999-9999" >
                            </div>
                            <div class="col-md-6 form-group mb-4">
                                <label>C.P.</label>
                                <input ng-model="user.cp" ng-class="{'invalido': errorCP }" id="cp" type="text"
                                    class="form-control form-control-solid" name="cp" ng-blur="getCP(user.cp)"
                                    placeholder="C.P." required autofocus>
                                <p ng-cloak class="error-form" ng-if="errorCP"><% errorCP %></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group mb-4">
                                <label>Estado</label>
                                <input ng-model="user.estado" id="estado" type="text"
                                    class="form-control form-control-solid" name="estado" placeholder="Estado" required
                                    autofocus disabled>
                            </div>
                            <div class="col-md-6 form-group mb-4">
                                <label>Municipio</label>
                                <input ng-model="user.municipio" id="municipio" type="text"
                                    class="form-control form-control-solid" name="municipio" placeholder="Municipio"
                                    required autofocus disabled>
                            </div>
                        </div>
                        <div class="row" ng-if="user.cp">
                            <div class="col-md-6 form-group mb-4">
                                <label>Colonia</label>
                                <select ng-class="{'invalido': errors.colonia }" class="form-control form-control-solid"
                                    ng-model="user.colonia" data-live-search="true" id="colonia" type="text" name="colonia"
                                    title="Selecciona tu colonia" required
                                    ng-options="colonia for colonia in user.coloniaArray"
                                    >
                                </select>
                                <p ng-cloak class="error-form" ng-if="errors.colonia"><% errors.colonia[0] %></p>
                            </div>
                            <div class="col-md-6 form-group mb-4">
                                <label>Calle y número</label>
                                <input ng-model="user.calle" id="calle" type="text" class="selectpicker form-control form-control-solid"
                                    name="calle" placeholder="Calle y número" required autofocus>
                                <p ng-cloak class="error-form" ng-if="errors.calle"><% errors.calle[0] %></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group mb-4">
                                <label>Correo</label>
                                <input ng-model="user.correo" ng-class="{'invalido': errors.correo}" class="form-control form-control-solid" name="correo"
                                    type="text" >
                                <p ng-cloak class="error-form" ng-if="errors.correo"><% errors.correo[0] %></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group mb-4">
                                <label>Contraseña</label>
                                <input ng-model="user.password" ng-class="{'invalido': errors.password}" class="form-control form-control-solid" name="password"
                                    type="password" >
                                <p ng-cloak class="error-form" ng-if="errors.password"><% errors.password[0] %></p>
                            </div>
                            <div class="col-md-6 form-group mb-4">
                                <label>Confirmar Contraseña</label>
                                <input ng-model="user.password_confirmation" ng-class="{'invalido': errors.password}" class="form-control form-control-solid"
                                    name="password_confirmation" type="password" >
                                <p ng-cloak class="error-form" ng-if="errors.password"><% errors.password[0] %></p>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary btn-air mr-2" ng-click="register(user,confirm)"
                                ng-disabled="!(user.nombre) || !(user.apellido) || !(user.telefono) || !(user.cp) || !(user.estado) || !(user.municipio) || !(user.correo) || !(user.password) || !(user.password_confirmation) || !(user.colonia) || !(user.calle)">Guardar</button>
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
    <div class="font-13">2019 © Montack</div>
    <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
</footer>
@endsection