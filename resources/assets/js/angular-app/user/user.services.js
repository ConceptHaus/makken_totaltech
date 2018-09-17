/**
 *  Module
 *
 * Description
 */
var app = angular.module("angularApp");

app.factory('UserFactory', function($http){
    return {
        login: function(data){
            return $http({
                method:'POST',
                url:'/login',
                data:data
            })
        },
        register: function(data){
            return $http({
                method:'POST',
                url:'/register',
                data:data
            })
        }
    }
})