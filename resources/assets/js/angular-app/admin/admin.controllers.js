/**
 *  Module
 *
 * Description
 */
var app = angular.module('adminController', ['angularApp']);

app.run(function (amMoment) {
    amMoment.changeLocale('es');
});

app.controller("adminCtrl", function ($scope, AdminFactory, $http, $window, Upload, CSRF_TOKEN) {
    // Usuarios registrados
    AdminFactory.allUsers().then(function (res) {
        $scope.usuarios = res.data;
        // console.log($scope.usuarios);
    }, function (err) {
        console.log(err);
    })

    // Usuarios Ganadores
    AdminFactory.ganadores().then(function (res) {
        $scope.ganadores = res.data;
        // console.log($scope.ganadores);
    }, function (err) {
        console.log(err);
    })

    // Usuario detalle
    AdminFactory.oneUser().then(function (res) {
        $scope.usuario = res.data;
        // console.log($scope.usuario);
    }, function (err) {
        console.log(err);
    })

    // Tickets
    AdminFactory.tickets().then(function (res) {
        $scope.tickets = res.data;
        // console.log($scope.tickets);
    }, function (err) {
        console.log(err);
    })

    // Tickets Usuarios
    AdminFactory.ticketsUsuarios().then(function (res) {
        $scope.ticketsUsuarios = res.data;
        // console.log($scope.ticketsUsuarios);
    }, function (err) {
        console.log(err);
    })

    // Establecimientos
    AdminFactory.establecimientos().then(function (res) {
        $scope.establecimientos = res.data;
        // console.log($scope.establecimientos);
    }, function (err) {
        console.log(err);
    })

    $scope.addTicket = function (ticket) {
        console.log(ticket);
        Swal.fire({
            title: "Espera...",
            text: "Estamos enviando tu ticket.",
            imageUrl: '/img/icons/Spinner-1s-200px.gif',
            showConfirmButton: false
        });
        Upload.upload({
                url: '/adminTicket',
                data: ticket
            })
            .then(function (res) {
                Swal.fire({
                    title: '¡Todo bien!',
                    text: 'Tu ticket se ha registrado con éxito',
                    confirmButtonText: 'Aceptar',
                }).then((result) => {
                    location.reload();
                });
                $scope.ticket = {};
                $('.img-default-ticket').attr('src', '/img/icons/camera-blue.svg');
            }, function (err) {
                Swal.fire({
                    type: 'error',
                    title: 'Oh no! Algo salió mal.',
                    text: err.data.error.no_ticket
                })
                // console.log(err.data.error);
            })
    }

    var readUrl = function (input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.img-default-ticket').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    $('#nuevoticket').change(function () {
        readUrl(this);
    })


    $scope.checkPosibleGanador = function (user) {
        Swal.fire({
            title: "Espera...",
            text: "Estamos enviado la información al posible ganador.",
            imageUrl: '/img/icons/Spinner-1s-200px.gif',
            showConfirmButton: false
        });
        console.log(user);
        $('#modalPosibleGanador').modal('hide');
        AdminFactory.setPosibleGanadorGanador(user)
            .then(function (data) {
                Swal.fire({
                    type: 'success',
                    title: "¡Listo!",
                    text: "El correo ha sido enviado con éxito."
                })
                location.reload();
            }, function (err) {
                Swal.fire({
                    type: 'error',
                    title: '¡Oh no!',
                    text: err.data
                })
                console.log(err);
            })
    }

    $scope.addGanador = function (userGanador) {
        console.log(userGanador);
        Swal.fire({
            title: "Espera...",
            text: "Estamos agregando los datos del ganador.",
            imageUrl: '/img/icons/Spinner-1s-200px.gif',
            showConfirmButton: false
        });
        AdminFactory.setGanador(userGanador)
            .then(function (data) {
                Swal.fire({
                    type: 'success',
                    title: "¡Listo!",
                    text: "El usuario ganador ha sido agregado con éxito.",
                }).then((result) => {
                    $window.location.href = '/admin/usuarios/ganadores';
                });
                console.log(data.data);
            }, function (err) {
                Swal.fire({
                    type: 'error',
                    title: '¡Oh no!',
                    text: err.data
                })
                console.log(err);
            })
    }

    $scope.getCP = function (cp) {
        $http.get('/api/v1/cp/' + cp)
            .then(function (res) {
                $scope.errorCP = null;
                $scope.user.estado = res.data.Estado;
                $scope.user.municipio = res.data.Municipio;
                $scope.user.coloniaArray = (res.data.Colonia).split(';');
                //console.log($scope.user);

            }, function (error) {
                $scope.errorCP = error.data.error;
                console.log($scope.errorCP);

            })
    }

    $scope.register = function (user) {
        console.log(user);
        Swal.fire({
            title: 'Espera...',
            text: 'Estamos verificando tus datos.',
            imageUrl: '/img/icons/Spinner-1s-200px.gif',
            showConfirmButton: false
        });

        AdminFactory.register(user).then(success, error);
    }

    var success = function (data) {
        // console.log(data.data);
        $window.location.href = '/admin/usuarios/registrados';
    }

    var error = function (errors) {
        $scope.errors = errors.data.fail;
        Swal.close();
        console.log(errors.data.fail);
    }

    $scope.delete = function (ticket) {
        console.log($scope.tickets);
        Swal.fire({
            title: '¿Seguro que quieres eliminar el monto?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            confirmButtonText: 'Si, eliminar',
            cancelButtonText: 'No, Cancelar'
        }).then((result) => {
            if (result.value) {
                AdminFactory.deleteTicket(ticket).then(function (res) {
                        Swal.fire({
                            title: 'Todo bien',
                            text: res.data.message,
                            type: 'success'
                        })
                        location.reload();
                    },
                    function (err) {
                        Swal.fire({
                            title: 'Algo salió mal',
                            text: err.data.message,
                            type: 'error'
                        })

                    });
            }
        })
    }

    AdminFactory.dashboard()
        .then(function (data) {
                $scope.dashboard_data = data.data;
                $scope.date = new Date();
                // console.log(data.data.data);
            },
            function (err) {
                console.log(err);
            });

    $scope.editMonto = function (ticket) {
        console.log(ticket);
        $('.modalEdit').modal('hide');
        Swal.fire({
            title: '¿Seguro que quieres modificar el monto?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            confirmButtonText: 'Si, modificar',
            cancelButtonText: 'No, cancelar'
        }).then((result) => {
            if (result.value) {
                AdminFactory.editTicket(ticket).then(function (res) {
                    Swal.fire({
                        title: 'Todo bien',
                        text: res.data.message,
                        type: 'success'
                    })
                    //console.log(res);
                    location.reload();
                },
                function (err) {
                    Swal.fire({
                        title: 'Algo salió mal',
                        text: err.data.message,
                        type: 'error'
                    })

                });
            }
        })
    }

    // Editar fecha de registro
    $scope.editFecha = function(ticket) {
        console.log(ticket);
        $('.modalEditDate').modal('hide');
        Swal.fire({
            title: '¿Seguro que quieres modificar la fecha?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            confirmButtonText: 'Si, modificar',
            cancelButtonText: 'No, cancelar'
        }).then((result) => {
            Swal.fire({
                title: 'Espera...',
                text: 'Estamos modifcando tus datos.',
                imageUrl: '/img/icons/Spinner-1s-200px.gif',
                showConfirmButton: false
            });
            if (result.value) {
                AdminFactory.editTicketDate(ticket).then(function (res) {
                    Swal.fire({
                        title: 'Todo bien',
                        text: res.data.message,
                        type: 'success'
                    })
                    location.reload();
                },
                function (err) {
                    Swal.fire({
                        title: 'Algo salió mal',
                        text: err.data.message,
                        type: 'error'
                    })

                });
            }
        })
    }

})

app.directive("money", function ($filter, $locale) {
    return {
        restrict: 'A',
        require: 'ngModel',
        link: function (scope, el, attr, ctrl) {
            // format on init
            formatMoney();

            function formatMoney() {
                var value = ctrl.$modelValue;

                // remove all separaters first
                var groupsep = $locale.NUMBER_FORMATS.GROUP_SEP;
                var re = new RegExp(groupsep, 'g');
                value = String(value).replace(re, '');

                // format using angular
                var currencyFilter = $filter('currency');
                var value = currencyFilter(value, "");

                // sorry but no cents
                var decimalsep = $locale.NUMBER_FORMATS.DECIMAL_SEP;
                value = value.split(decimalsep)[0];

                // render
                ctrl.$viewValue = value;
                ctrl.$render();
            };

            // subscribe on changes
            scope.$watch(attr.ngModel, function () {
                formatMoney();
            });
        }
    };
});
