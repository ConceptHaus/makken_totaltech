/**
 *  Module
 *
 * Description
 */
var app = angular.module('userController',['angularApp']);

app.controller("userCtrl", function($scope, UserFactory, $http, $window, Upload,CSRF_TOKEN){

    $scope.login = function(user){
        console.log(user);
        swal({
            title:'Espera...',
            text:'Estamos verificando tus datos.',
            imageUrl: 'img/icons/Spinner-1s-200px.gif',
            showConfirmButton:false
        });
        UserFactory.login(user).then(success, error);
    }
    $scope.register = function(user) {
        console.log(user);
        swal({
            title: 'Espera...',
            text: 'Estamos verificando tus datos.',
            imageUrl: 'img/icons/Spinner-1s-200px.gif',
            showConfirmButton: false
        });

        UserFactory.register(user).then(success, error);
    }
    $scope.getCP = function(cp){
        $http.get('/api/v1/cp/' + cp)
            .then(function(res) {

                    $scope.errorCP = null;
                    $scope.user.estado = res.data.Estado;
                    $scope.user.municipio = res.data.Municipio;
                    console.log($scope.user);

            }, function(error){
                $scope.errorCP = error.data.error;
                console.log($scope.errorCP);

            })
    }
    $scope.getEstablecimientos = function(){
        $http.get('api/v1/establecimientos').then(function(res){
            $scope.establecimientos = res.data;
            console.log($scope.establecimientos);
        },function(err){
            console.log(err);
        })
    }
   $scope.addTicket = function(ticket){
       console.log(ticket);
    swal({
        title:"Espera...",
        text:"Estamos enviando tu ticket.",
        imageUrl: 'img/icons/Spinner-1s-200px.gif',
        showConfirmButton:false
    });
    Upload.upload({
        url:'/ticket',
        data:ticket
    })
    .then(function(res){
        swal({
            title:"¡Todo bien!",
            text:"Tu ticket se ha registrado con éxito",
            confirmButtonText: 'Regresar a mi cuenta',
            showCancelButton: true,
            cancelButtonText: 'Subir otro ticket'
        }).then((result)=>{
            if(result.value){
                $window.location.href="/home";
            }
        })
        console.log(res.data);
        $ticket = null;
    },function(err){
        swal({
            type:'error',
            title:'Oh no!',
            text:'Algo salió mal.'
        })
        console.log(err.data);
    })

   }
    var success = function(data){
        console.log(data.data);
        if(data.data['admin'] == true){
            $window.location.href = '/admin/usuarios/registrados';
        }else{
            $window.location.href = '/home';
        }

    }

    var error = function(errors){
        $scope.errors = errors.data.fail;
        swal.close();
        console.log(errors.data.fail);
    }
     $scope.getEstablecimientos();

})
