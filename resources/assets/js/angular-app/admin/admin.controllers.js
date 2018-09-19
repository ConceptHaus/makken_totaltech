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
        console.log($scope.usuarios);
    },function(err){
        console.log(err);
    })

    // Usuarios Ganadores  
    AdminFactory.ganadores().then(function(res){
        $scope.ganadores = res.data;
        console.log($scope.ganadores);
    },function(err){
        console.log(err);
    })

    // Usuario detalle  
    AdminFactory.oneUser().then(function(res){
        $scope.usuario = res.data;
        console.log($scope.usuario);
    },function(err){
        console.log(err);
    })

    // Tickets
    AdminFactory.tickets().then(function(res){
        $scope.tickets = res.data;
        console.log($scope.tickets);
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
  
    $scope.addTicket = function(){

    }

})
