/**
 *  Module
 *
 * Description
 */
var app = angular.module('AdminFactory', ['angularApp']);

app.factory('AdminFactory',['$http', function($http){
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
        ticketsUsuarios: function(){
            return $http({
                method:'GET',
                url:'/api/v1/ticketsUsuarios'
            })
        },
        setPosibleGanadorGanador: function(data){
            return $http({
                method:'POST',
                url:'/posibleganador',
                data:data
            })
        },
        setGanador: function(data){
            return $http({
                method:'POST',
                url:'/ganador',
                data:data
            })
        },
        deleteTicket: function(data){
            return $http({
                method:'POST',
                url:'/ticket/delete',
                data:data
            })
        },
        editTicket: function(data){
            return $http({
                method:'POST',
                url:'/ticket/monto',
                data:data
            })
        },
        editTicketDate: function(data){
            return $http({
                method:'POST',
                url:'/ticket/fecha',
                data:data
            })
        },
        dashboard: function(){
            return $http({
                method:'GET',
                url:'/api/v1/dashboard'
            })
        }
    }
}])
