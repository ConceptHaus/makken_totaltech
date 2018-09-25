/**
 *  Module
 *
 * Description
 */
var app = angular.module('forgotPasswordController',['angularApp']);

app.controller("ForgotPasswordCtrl", function($scope, ForgotFactory, $http, $window, Upload,CSRF_TOKEN){
  $scope.forgot2 = function (correo) {
      //console.log(user);
      swal({
          title: 'Espera...',
          text: 'Estamos verificando tus datos.',
          imageUrl: '../img/icons/Spinner-1s-200px.gif',
          showConfirmButton: false
      });
      ForgotFactory.forgot(correo).then(function(res){
        swal({
            title:"¡Todo bien!",
            text:"Revisa tu correo electrónico",
            confirmButtonText: 'Iniciar Sesión'
        }).then((result)=>{
            if(result.value){
                $window.location.href="/login";
            }
        });
      }, function(err){
        console.log(err);
        swal({
            title:"¡Ups algo salio mal!",
            text: err.data.fail.correo,
            confirmButtonText: 'Regresar',
            showCancelButton: true,
            cancelButtonText: 'Intentar nuevamente',
        }).then((result)=>{
            if(result.value){
                $window.location.href="/";
            }
        });
      });
  }

  $scope.reset = function (resetP) {
      console.log(resetP);
      swal({
          title: 'Espera...',
          text: 'Estamos verificando tus datos.',
          imageUrl: '../img/icons/Spinner-1s-200px.gif',
          showConfirmButton: false
      });
      ForgotFactory.reset2(resetP).then(function(res){
        swal({
            title:"¡Todo bien!",
            text:"Tu contraseña ha sido restablecida",
            confirmButtonText: 'Ir a Mi Cuenta'
        }).then((result)=>{
            if(result.value){
                $window.location.href="/home";
            }
        });
      }, function(err){
        console.log(err);
        swal({
            title:"¡Ups algo salio mal!",
            text: "Intenta nuevamente",
            confirmButtonText: 'Regresar',
            showCancelButton: true,
            cancelButtonText: 'Intentar nuevamente',
        }).then((result)=>{
            if(result.value){
                $window.location.href="/";
            }
        });
      });
  }
})
