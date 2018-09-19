/**
 *  Module
 *
 * Description
 */
var app = angular.module('adminController',['angularApp']);
    
app.controller("adminCtrl", function($scope, AdminFactory, $http, $window, Upload, CSRF_TOKEN){

    // Usuarios registrados
    var getUsuarioRegistrados = function(){    
        AdminFactory.allUsers().then(function(res){
            $scope.usuarios = res.data;
            console.log($scope.usuarios);
        },function(err){
            console.log(err);
        })
    }

    // Usuarios Ganadores
    var getUsuariosGanadores = function(){    
        AdminFactory.ganadores(id).then(function(res){
            $scope.ganadores = res.data;
            console.log($scope.ganadores);
        },function(err){
            console.log(err);
        })
    }

    // Usuario detalle
    var getUsuarioDetalle = function(){    
        AdminFactory.oneUser(id).then(function(res){
            $scope.usuario = res.data;
            console.log($scope.usuario);
        },function(err){
            console.log(err);
        })
    }

    // Tickets
    var getTickets = function(){    
        AdminFactory.tickets(id).then(function(res){
            $scope.tickets = res.data;
            console.log($scope.tickets);
        },function(err){
            console.log(err);
        })
    }

    // Establecimientos
    var getEstablecimientos = function(){    
        AdminFactory.establecimientos(id).then(function(res){
            $scope.establecimientos = res.data;
            console.log($scope.establecimientos);
        },function(err){
            console.log(err);
        })
    }















    $scope.addTicket = function(){

    }
  




    getUsuarioRegistrados();
    getUsuarioRegistrados();
    getUsuariosGanadores();
    getUsuarioDetalle();
    getTickets();
    getEstablecimientos();









    



























    $scope.getEstablecimientos = function(){
        adminFactory.establecimientos().then(function(res){
            $scope.establecimientos = res.data;
            console.log($scope.establecimientos);
        }, function(err){
            console.log(err);
        })
    }

    $scope.addTicket = function(){
        
>>>>>>> cce9eafd75782dcb310beb2b27f4f04efdfc90bc
    }

    getUsuarioRegistrados();

})
