/**
 *  Module
 *
 * Description
 */
var app = angular.module('adminController',['angularApp']);
    
app.controller("adminCtrl", function($scope, AdminFactory, $http, $window, Upload, CSRF_TOKEN){
    
    console.log('CONTROLLER USERS');
    // Usuarios registrados
    $scope.getUsuarioRegistrados = function(){
        adminFactory.allUsers().then(function(res){
            $scope.usuarios = res.data;
            console.log($scope.usuarios);
        },function(err){
            console.log(err);
        })
    }



























    $scope.getEstablecimientos = function(){
        adminFactory.establecimientos().then(function(res){
            $scope.establecimientos = res.data;
            console.log($scope.establecimientos);
        }, function(err){
            console.log(err);
        })
    }

    $scope.addTicket = function(){
        
    }

})
