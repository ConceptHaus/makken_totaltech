@extends('layouts.app-admin')

@section('content')
    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-content fade-in-up">
            <div class="ibox">
                <div class="ibox-body">
                    <div class="flexbox mb-5">
                        <h5 class="font-strong">TICKETS</h5>
                        <div class="flexbox">
                            <div class="input-group-icon input-group-icon-left mr-3">
                                <span class="input-icon input-icon-right font-16"><i class="ti-search"></i></span>
                                <input class="form-control form-control-rounded form-control-solid" id="key-search" type="text"
                                    placeholder="Buscar ...">
                            </div>
                            <a class="btn btn-rounded btn-primary btn-air" href="nuevo_ticket.html">Agregar Tickect</a>
                        </div>
                    </div>
                    <div class="table-responsive row">
                        <table class="table table-bordered table-hover" id="customers-table">
                            <thead class="thead-default thead-lg">
                                <tr>
                                    <th>ID</th>
                                    <th>Customer</th>
                                    <th>Email</th>
                                    <th>Purchases</th>
                                    <th>Phone</th>
                                    <th class="no-sort"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <img class="img-circle mr-3" src="./assets/img/users/u6.jpg" alt="image" width="40" />Connor
                                        Perez</td>
                                    <td>example@gmail.com</td>
                                    <td>$2420</td>
                                    <td>+1-202-555-0134</td>
                                    <td>
                                        <a class="text-light font-16" href="javascript:;"><i class="fa fa-heart-o"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <img class="img-circle mr-3" src="./assets/img/users/u8.jpg" alt="image" width="40" />Lynn
                                        Weaver</td>
                                    <td>example@gmail.com</td>
                                    <td>$1470</td>
                                    <td>+1-202-555-0134</td>
                                    <td>
                                        <a class="text-pink font-16" href="javascript:;"><i class="fa fa-heart"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        <img class="img-circle mr-3" src="./assets/img/users/u11.jpg" alt="image" width="40" />Tyrone
                                        Carroll</td>
                                    <td>example@gmail.com</td>
                                    <td>$560</td>
                                    <td>+1-202-555-0134</td>
                                    <td>
                                        <a class="text-light font-16" href="javascript:;"><i class="fa fa-heart-o"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>
                                        <img class="img-circle mr-3" src="./assets/img/users/u10.jpg" alt="image" width="40" />Stella
                                        Obrien</td>
                                    <td>example@gmail.com</td>
                                    <td>$560</td>
                                    <td>+1-202-555-0134</td>
                                    <td>
                                        <a class="text-light font-16" href="javascript:;"><i class="fa fa-heart-o"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>
                                        <img class="img-circle mr-3" src="./assets/img/users/u2.jpg" alt="image" width="40" />Becky
                                        Brooks</td>
                                    <td>example@gmail.com</td>
                                    <td>$3570</td>
                                    <td>+1-202-555-0134</td>
                                    <td>
                                        <a class="text-pink font-16" href="javascript:;"><i class="fa fa-heart"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>
                                        <img class="img-circle mr-3" src="./assets/img/users/u5.jpg" alt="image" width="40" />Bob
                                        Gonzalez</td>
                                    <td>example@gmail.com</td>
                                    <td>$1360</td>
                                    <td>+1-202-555-0134</td>
                                    <td>
                                        <a class="text-light font-16" href="javascript:;"><i class="fa fa-heart-o"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>
                                        <img class="img-circle mr-3" src="./assets/img/users/u9.jpg" alt="image" width="40" />Tammy
                                        Newman</td>
                                    <td>example@gmail.com</td>
                                    <td>$480</td>
                                    <td>+1-202-555-0134</td>
                                    <td>
                                        <a class="text-pink font-16" href="javascript:;"><i class="fa fa-heart"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>
                                        <img class="img-circle mr-3" src="./assets/img/users/u7.jpg" alt="image" width="40" />Jeanne
                                        Smith</td>
                                    <td>example@gmail.com</td>
                                    <td>$45</td>
                                    <td>+1-202-555-0134</td>
                                    <td>
                                        <a class="text-light font-16" href="javascript:;"><i class="fa fa-heart-o"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>
                                        <img class="img-circle mr-3" src="./assets/img/users/u3.jpg" alt="image" width="40" />Frank
                                        Cruz</td>
                                    <td>example@gmail.com</td>
                                    <td>$140</td>
                                    <td>+1-202-555-0134</td>
                                    <td>
                                        <a class="text-light font-16" href="javascript:;"><i class="fa fa-heart-o"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>
                                        <img class="img-circle mr-3" src="./assets/img/users/u1.jpg" alt="image" width="40" />Jeanne
                                        Gonzalez</td>
                                    <td>example@gmail.com</td>
                                    <td>$85</td>
                                    <td>+1-202-555-0134</td>
                                    <td>
                                        <a class="text-light font-16" href="javascript:;"><i class="fa fa-heart-o"></i></a>
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