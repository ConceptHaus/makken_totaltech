/**
 *  Module
 *
 * Description
 */
var app = angular.module('UserController',["angularApp"]);

app.controller('User', function($scope, $http, $window,CSRF_TOKEN){
    $scope.login = function(user){
        console.log('login');
        Swal('Prueba');
    }

    $scope.register = function(user){
        console.log('register');
    }


})