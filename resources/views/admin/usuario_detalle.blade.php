@extends('layouts.app-admin')

@section('content')
    <!-- START PAGE CONTENT-->
    <div class="page-content fade-in-up">
        <div class="d-flex align-items-center mb-5">
            <span class="mr-4 static-badge badge-blue"><i class="la la-user"></i></span>
            <div>
                <h5 class="font-strong">Detalle Usuario</h5>
                <div class="text-light">Emma Johnson</div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-5">
                <div class="ibox">
                    <div class="ibox-body">
                        <h5 class="font-strong mb-4">Informacion General</h5>
                        <div class="row align-items-center mb-3">
                            <div class="col-4 text-light">Nombre</div>
                            <div class="col-8">Emma Johnson</div>
                        </div>
                        <div class="row align-items-center mb-3">
                            <div class="col-4 text-light">Dirección</div>
                            <div class="col-8">San Francisco, CA 94103 Market Street</div>
                        </div>
                        <div class="row align-items-center mb-3">
                            <div class="col-4 text-light">Correo</div>
                            <div class="col-8">example@gmail.com</div>
                        </div>
                        <div class="row align-items-center mb-3">
                            <div class="col-4 text-light">Teléfono</div>
                            <div class="col-8">+380681478544</div>
                        </div>
                        <div class="row align-items-center mb-3">
                            <div class="col-4 text-light">Fecha registro</div>
                            <div class="col-8">17.05.2018</div>
                        </div>
                        <div class="row align-items-center mb-3">
                            <div class="col-4 text-light">Ganador</div>
                            <div class="col-8">Sí</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="ibox">
                    <div class="ibox-body">
                        <h5 class="font-strong mb-5">Tickets registrados</h5>
                        <table class="table table-bordered table-hover">
                            <thead class="thead-default thead-lg">
                                <tr>
                                    <th>No.</th>
                                    <th>No. Ticket</th>
                                    <th>Establecimiento</th>
                                    <th>Fecha</th>
                                    <th>Monto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>3</td>
                                    <td>455354 - 546763</td>
                                    <td>
                                        <img class="mr-3" src="./assets/img/products/16.jpg" alt="image" width="60" />
                                        Cheadraui
                                    </td>
                                    <td>17.05.2018</td>
                                    <td>$3,000</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>455354 - 780978</td>
                                    <td>
                                        <img class="mr-3" src="./assets/img/products/16.jpg" alt="image" width="60" />
                                        laComer
                                    </td>
                                    <td>18.05.2018</td>
                                    <td>$1,500</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>455354 - 454233</td>
                                    <td>
                                        <img class="mr-3" src="./assets/img/products/16.jpg" alt="image" width="60" />
                                        Walmart
                                    </td>
                                    <td>19.05.2018</td>
                                    <td>$1,000</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end">
                            <div class="text-right" style="width:300px;">
                                <div class="row font-strong font-15">
                                    <div class="col-6">Monto Total:</div>
                                    <div class="col-6">
                                        <div class="h5 font-strong">$6,500</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTENT-->
    <!-- END PAGE CONTENT-->
    <footer class="page-footer">
        <div class="font-13">2018 © Total Tech</div>
        <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
    </footer>
@endsection