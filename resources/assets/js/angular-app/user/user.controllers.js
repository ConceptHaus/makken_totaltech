/**
 *  Module
 *
 * Description
 */
var app = angular.module('userController',['angularApp']);

app.controller("userCtrl", function($scope, UserFactory, $http, $window,CSRF_TOKEN){
    
    $scope.login = function(user){
        console.log(user);
        swal({
            title:'Espera...',
            text:'Estamos verificando tus datos.',
            showConfirmButton:false
        });
        UserFactory.login(user).then(success, error);
    }
    $scope.register = function(user) {
        console.log(user);
        swal({
            title: 'Espera...',
            text: 'Estamos verificando tus datos.',
            showConfirmButton: false
        });
        UserFactory.register(user).then(success, error);

        
    }
    var success = function(data){
        console.log(data.data);
        $window.location.href = '/home';
    }
    
    var error = function(errors){
        $scope.errors = errors.data.fail;
        swal.close()
        console.log(errors.data.fail);
    }
    

})