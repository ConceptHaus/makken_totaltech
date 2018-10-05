/**
 *  Module
 *
 * Description
 */
var app = angular.module('adminController',['angularApp']);

app.run(function(amMoment) {
	amMoment.changeLocale('es');
});
    
app.controller("adminCtrl", function($scope, AdminFactory, $http, $window, Upload, CSRF_TOKEN){
    // Usuarios registrados  
    AdminFactory.allUsers().then(function(res){
        $scope.usuarios = res.data;
    },function(err){
        console.log(err);
    })

    // Usuarios Ganadores  
    AdminFactory.ganadores().then(function(res){
        $scope.ganadores = res.data;
        // console.log($scope.ganadores);
    },function(err){
        console.log(err);
    })

    // Usuario detalle  
    AdminFactory.oneUser().then(function(res){
        $scope.usuario = res.data;
        // console.log($scope.usuario);
    },function(err){
        console.log(err);
    })

    // Tickets
    AdminFactory.tickets().then(function(res){
        $scope.tickets = res.data;
        // console.log($scope.tickets);
    },function(err){
        console.log(err);
    })

    // Establecimientos
    AdminFactory.establecimientos().then(function(res){
        $scope.establecimientos = res.data;
        console.log($scope.establecimientos);
    },function(err){
        console.log(err);
    })
  
    $scope.addTicket = function(ticket){
        console.log(ticket);
        swal({
            title: "Espera...",
            text: "Estamos enviando tu ticket.",
            imageUrl: '/img/icons/Spinner-1s-200px.gif',
            showConfirmButton: false
        });
        Upload.upload({
            url: '/adminTicket',
            data: ticket
        })
        .then(function(res){
            swal({
                title:'¡Todo bien!',
                text: 'Tu ticket se ha registrado con éxito',
                confirmButtonText: 'Aceptar',
            }).then((result)=>{
                location.reload();
            });
            $scope.ticket = {};
            $('.img-default-ticket').attr('src', '/img/icons/camera-blue.svg');
        },function(err){
            swal({
                type: 'error',
                title: 'Oh no!',
                text: 'Algo salió mal.'
            })
            console.log(err.data);
        })
    }

    var readUrl = function(input){
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.img-default-ticket').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    $('#nuevoticket').change(function(){
        readUrl(this);
    })


    $scope.checkPosibleGanador = function(user){
        swal({
            title: "Espera...",
            text: "Estamos enviado la información al posible ganador.",
            imageUrl: '/img/icons/Spinner-1s-200px.gif',
            showConfirmButton: false
        });
        $('#modalPosibleGanador').modal('hide');
        AdminFactory.setPosibleGanadorGanador(user)
        .then(function(data){
            swal({
                 type:'success',
                 title: "¡Listo!",
                 text: "El correo ha sido enviado con éxito."
            })
            location.reload();
        },function(err){
            swal({
                type:'error',
                title:'¡Oh no!',
                text:err.data
            })
            console.log(err);
        })
    }

    $scope.addGanador = function(userGanador){
        console.log(userGanador);
        swal({
            title: "Espera...",
            text: "Estamos agregando los datos del ganador.",
            imageUrl: '/img/icons/Spinner-1s-200px.gif',
            showConfirmButton: false
        });
        AdminFactory.setGanador(userGanador)
        .then(function(data){
             swal({
                 type:'success',
                 title: "¡Listo!",
                 text: "El usuario ganador ha sido agregado con éxito.",
             }).then((result)=>{
                $window.location.href = '/admin/usuarios/ganadores';
             });
            console.log(data.data);
        },function(err){
            swal({
                type:'error',
                title:'¡Oh no!',
                text:err.data
            })
            console.log(err);
        })
    }

    $scope.getCP = function(cp){
        $http.get('/api/v1/cp/' + cp)
        .then(function(res) {
                $scope.errorCP = null;
                $scope.user.estado = res.data.Estado;
                $scope.user.municipio = res.data.Municipio;
                // console.log($scope.user);

        }, function(error){
            $scope.errorCP = error.data.error;
            console.log($scope.errorCP);

        })
    }

    $scope.register = function(user) {
        console.log(user);
        swal({
            title: 'Espera...',
            text: 'Estamos verificando tus datos.',
            imageUrl: 'img/icons/Spinner-1s-200px.gif',
            showConfirmButton: false
        });

        AdminFactory.register(user).then(success, error);
    }

    var success = function(data){
        // console.log(data.data);
        $window.location.href = '/admin/usuarios/registrados';
    }

    var error = function(errors){
        $scope.errors = errors.data.fail;
        swal.close();
        console.log(errors.data.fail);
    }

    $scope.delete = function(ticket){
        console.log($scope.tickets);
        swal({
            title: '¿Estás seguro?',
            text: 'El ticket se eliminará',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor:'#d33',
            confirmButtonText:'Si, eliminar'
        }).then((result)=>{
            if(result.value){
                AdminFactory.deleteTicket(ticket).then(function(res){
                    swal({
                        title:'Todo bien',
                        text:res.data.message,
                        type:'success'
                    })
                    location.reload();
                },
                function(err){
                    swal({
                        title: 'Algo salió mal',
                        text: err.data.message,
                        type: 'error'
                    })

                });
            }
        })
    }
})
