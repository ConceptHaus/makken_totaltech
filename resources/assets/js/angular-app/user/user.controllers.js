/**
 *  Module
 *
 * Description
 */
var app = angular.module('userController',['angularApp']);

app.controller("userCtrl", function($scope, UserFactory, $http, $window, Upload,CSRF_TOKEN){

    $scope.login = function(user){
        console.log(user);
        Swal.fire({
            title:'Espera...',
            text:'Estamos verificando tus datos.',
            imageUrl: 'img/icons/Spinner-1s-200px.gif',
            showConfirmButton:false
        });
        UserFactory.login(user).then(success, error);
    }
    $scope.register = function(user) {
        console.log(user);
        swal({
            title: 'Espera...',
            text: 'Estamos verificando tus datos.',
            imageUrl: 'img/icons/Spinner-1s-200px.gif',
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
                    $scope.user.coloniaArray = (res.data.Colonia).split(';');
                    console.log($scope.user);

            }, function(error){
                $scope.errorCP = error.data.error;
                console.log($scope.errorCP);

            })
    }
    $scope.getEstablecimientos = function(){
        $http.get('api/v1/establecimientos').then(function(res){
            $scope.establecimientos = res.data;
            console.log($scope.establecimientos);
        },function(err){
            console.log(err);
        })
    }
   $scope.addTicket = function(ticket){
       console.log(ticket);
       $('#covidModal').modal('show');
    // Swal.fire({
    //     title:"Espera...",
    //     text:"Estamos enviando tu ticket.",
    //     imageUrl: 'img/icons/Spinner-1s-200px.gif',
    //     showConfirmButton:false
    // });
    // Upload.upload({
    //     url:'/ticket',
    //     data:ticket
    // })
    // .then(function(res){
    //     Swal.fire({
    //         title:"¡Todo bien!",
    //         text:"Tu ticket se ha registrado con éxito",
    //         confirmButtonText: 'Regresar a mi cuenta',
    //         showCancelButton: true,
    //         cancelButtonText: 'Subir otro ticket'
    //     }).then((result)=>{
    //         if(result.value){
    //             $window.location.href="/home";
    //         }
    //     })
    //     console.log(res.data);
    //     $ticket = null;
    // },function(err){
    //     Swal.fire({
    //         type:'error',
    //         title:'Oh no!, Algo salió mal.',
    //         text: err.data.error.no_ticket
    //     })
    //     // console.log(err.data);
    // })

   }
    var success = function(data){
        console.log(data.data);
        if(data.data['admin'] == true){
            $window.location.href = '/admin/dashboard';
        }else{
            $window.location.href = '/home';
        }

    }

    var error = function(errors){
        $scope.errors = errors.data.fail;
        Swal.close();
        console.log(errors.data.fail);
    }
     $scope.getEstablecimientos();

})

app.directive("money",function ($filter, $locale) {
    return {
      restrict: 'A',
      require: 'ngModel',
      link: function (scope, el, attr, ctrl) {
        // format on init
        formatMoney();

        function formatMoney() {
          var value = ctrl.$modelValue;

          // remove all separaters first
          var groupsep = $locale.NUMBER_FORMATS.GROUP_SEP;
          var re = new RegExp(groupsep, 'g');
          value = String(value).replace(re, '');

          // format using angular
          var currencyFilter = $filter('currency');
          var value = currencyFilter(value, "");

          // sorry but no cents
          var decimalsep = $locale.NUMBER_FORMATS.DECIMAL_SEP;
          value = value.split(decimalsep)[0];

          // render
          ctrl.$viewValue = value;
          ctrl.$render();
        };

        // subscribe on changes
        scope.$watch(attr.ngModel, function() {
          formatMoney();
        });
      }
    };
});
