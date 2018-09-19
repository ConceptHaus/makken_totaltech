/**
 *  Module
 *
 * Description
 */
var app = angular.module('adminController',['angularApp']);
    
app.controller("adminCtrl", function($scope, AdminFactory, $http, $window, Upload, CSRF_TOKEN){

    // Usuarios registrados  
    AdminFactory.allUsers().then(function(res){
        $scope.usuarios = res.data;
        console.log('Usuarios');
        console.log($scope.usuarios);
    },function(err){
        console.log(err);
    })

    // Usuarios Ganadores  
    AdminFactory.ganadores().then(function(res){
        console.log('Ganadores');
        $scope.ganadores = res.data;
        console.log($scope.ganadores);
    },function(err){
        console.log(err);
    })

    // Usuario detalle  
    AdminFactory.oneUser().then(function(res){
        $scope.usuario = res.data;
        console.log('Usuario Detalle');
        console.log($scope.usuario);
    },function(err){
        console.log(err);
    })

    // Tickets
    AdminFactory.tickets().then(function(res){
        $scope.tickets = res.data;
        console.log('Tickets');
        console.log($scope.tickets);
    },function(err){
        console.log(err);
    })

    // Establecimientos
    AdminFactory.establecimientos().then(function(res){
        $scope.establecimientos = res.data;
        console.log('Establecimientos');
        console.log($scope.establecimientos);
    },function(err){
        console.log(err);
    })
  
    $scope.addTicket = function(ticket){
        console.log(ticket);
        swal({
            title: "Espera...",
            text: "Estamos enviando tu ticket.",
            imageUrl: 'img/icons/Spinner-1s-200px.gif',
            showConfirmButton: false
        });
        
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

})
