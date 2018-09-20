/**
 *  Module
 *
 * Description
 */
var app = angular.module('AdminFactory', ['angularApp']);

app.factory('AdminFactory', function($http){
    return{
        register: function(data){
            return $http({
                method:'POST',
                url:'/registro',
                data:data
            })
        },
        allUsers: function(){
            return $http({
                method:'GET',
                url:'/api/v1/users'
            })
        },
        oneUser: function(id){
            return $http({
                method:'GET',
                url:'/api/v1/users/'+id,
            })
        },
        establecimientos: function(){
            return $http({
                method:'GET',
                url:'/api/v1/establecimientos'
            })
        },
        ganadores: function(){
            return $http({
                method:'GET',
                url:'/api/v1/ganadores'
            })
        },
        tickets: function(){
            return $http({
                method:'GET',
                url:'/api/v1/tickets'
            })
        },
        setGanador: function(data){
            return $http({
                method:'POST',
                url:'/ganador',
                data:data
            })
        }
    }
})