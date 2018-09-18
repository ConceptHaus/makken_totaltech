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