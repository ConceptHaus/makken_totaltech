/**
 *  Module
 *
 * Description
 */
var app = angular.module('userFactory',['angularApp']);

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
                url:'/registro',
                data:data
            })
        }
    }
})