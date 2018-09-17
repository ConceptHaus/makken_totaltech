/**
 *  Module
 *
 * Description
 */
var app = angular.module('userController',['angularApp']);

app.controller("userCtrl", function($scope, UserFactory, $http, $window,CSRF_TOKEN){
    
    $scope.login = function(user){
        console.log(user);
        UserFactory.login(user).then(success, error);
    }
    $scope.register = function (user) {
        UserFactory.register(user).then(success, error);

        console.log('register');
    }
    var success = function(data){
        console.log(data.data);
    }
    
    var error = function(errors){
        console.log(errors.data);
    }
    

})