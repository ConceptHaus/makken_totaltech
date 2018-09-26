/**
 *  Module
 *
 * Description
 */
var app = angular.module('forgotFactory',['angularApp']);

app.factory('ForgotFactory', function($http){
    return {
        forgot: function(data){
          return $http({
            method:'POST',
            url:'/forgot',
            data:data
          })
        },
        reset2: function(data){
          return $http({
            method:'POST',
            url:'/resetpassword',
            data:data
          })
        }
    }
})
