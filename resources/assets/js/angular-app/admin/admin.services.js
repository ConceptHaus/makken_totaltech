/**
 *  Module
 *
 * Description
 */
var app = angular.module('adminFactory', ['angularApp']);

app.factory('AdminFactory', function($http){
    return{
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
        establecimiento: function(){
            return $http({
                method:'GET',
                url:'/api/v1/establecimientos'
            })
        }
    }
})