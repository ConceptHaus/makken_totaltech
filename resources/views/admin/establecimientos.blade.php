@extends('layouts.app-admin')

@section('content')
<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-body">
                <h5 class="font-strong mb-4">ESTABLECIMIENTOS</h5>
                <div class="flexbox mb-4">
                    <div class="flexbox"></div>
                    <div class="flexbox">
                        <div class="input-group-icon input-group-icon-left mr-3">
                            <span class="input-icon input-icon-right font-16"><i class="ti-search"></i></span>
                            <input class="form-control form-control-rounded form-control-solid" id="key-search" type="text"
                                placeholder="Buscar ...">
                        </div>
                        <a class="btn btn-rounded btn-primary btn-air" href="">Agregar establecimiento</a>
                    </div>
                </div>
                <div class="table-responsive row">
                    <table class="table table-bordered table-hover" id="products-table">
                        <thead class="thead-default thead-lg">
                            <tr>
                                <th>No.</th>
                                <th>Nombre</th>
                                <th class="no-sort"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    {{-- <img class="mr-3" src="./assets/img/products/07.jpg" alt="image" width="60" /> --}}
                                    Walmart
                                </td>
                                <td>
                                    <a class="text-light mr-3 font-16" href="javascript:;"><i class="ti-pencil"></i></a>
                                    <a class="text-light font-16" href="javascript:;"><i class="ti-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    {{-- <img class="mr-3" src="./assets/img/products/10.jpg" alt="image" width="60" /> --}}
                                    Soriana
                                </td>
                                <td>
                                    <a class="text-light mr-3 font-16" href="javascript:;"><i class="ti-pencil"></i></a>
                                    <a class="text-light font-16" href="javascript:;"><i class="ti-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    {{-- <img class="mr-3" src="./assets/img/products/16.jpg" alt="image" width="60" /> --}}
                                    La Comer
                                </td>
                                <td>
                                    <a class="text-light mr-3 font-16" href="javascript:;"><i class="ti-pencil"></i></a>
                                    <a class="text-light font-16" href="javascript:;"><i class="ti-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>
                                    {{-- <img class="mr-3" src="./assets/img/products/15.jpg" alt="image" width="60" /> --}}
                                    Casa Gravioto
                                </td>
                                <td>
                                    <a class="text-light mr-3 font-16" href="javascript:;"><i class="ti-pencil"></i></a>
                                    <a class="text-light font-16" href="javascript:;"><i class="ti-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>
                                    {{-- <img class="mr-3" src="./assets/img/products/15.jpg" alt="image" width="60" /> --}}
                                    H-E-B
                                </td>
                                <td>
                                    <a class="text-light mr-3 font-16" href="javascript:;"><i class="ti-pencil"></i></a>
                                    <a class="text-light font-16" href="javascript:;"><i class="ti-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>
                                    {{-- <img class="mr-3" src="./assets/img/products/15.jpg" alt="image" width="60" /> --}}
                                    Lowe´s
                                </td>
                                <td>
                                    <a class="text-light mr-3 font-16" href="javascript:;"><i class="ti-pencil"></i></a>
                                    <a class="text-light font-16" href="javascript:;"><i class="ti-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>
                                    {{-- <img class="mr-3" src="./assets/img/products/15.jpg" alt="image" width="60" /> --}}
                                    The Home Depot
                                </td>
                                <td>
                                    <a class="text-light mr-3 font-16" href="javascript:;"><i class="ti-pencil"></i></a>
                                    <a class="text-light font-16" href="javascript:;"><i class="ti-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>
                                    {{-- <img class="mr-3" src="./assets/img/products/15.jpg" alt="image" width="60" /> --}}
                                    CHEDRAUI
                                </td>
                                <td>
                                    <a class="text-light mr-3 font-16" href="javascript:;"><i class="ti-pencil"></i></a>
                                    <a class="text-light font-16" href="javascript:;"><i class="ti-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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