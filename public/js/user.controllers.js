/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/angular-app/user/user.controllers.js":
/*!******************************************************************!*\
  !*** ./resources/assets/js/angular-app/user/user.controllers.js ***!
  \******************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/**
 *  Module
 *
 * Description
 */
var app = angular.module('userController', ['angularApp']);
app.controller("userCtrl", function ($scope, UserFactory, $http, $window, Upload, CSRF_TOKEN) {
  //$scope.id_promo = 'valor_de_id_promo';
  id_promo = $scope.user;
  $scope.login = function (user) {
    Swal.fire({
      title: 'Espera...',
      text: 'Estamos verificando tus datos.',
      imageUrl: 'img/icons/Spinner-1s-200px.gif',
      showConfirmButton: false
    });
    UserFactory.login(user).then(success, error);
  };

  $scope.register = function (user) {
    swal({
      title: 'Espera...',
      text: 'Estamos verificando tus datos.',
      imageUrl: 'img/icons/Spinner-1s-200px.gif',
      showConfirmButton: false
    });
    UserFactory.register(user).then(success, error);
  };

  $scope.getCP = function (cp) {
    $http.get('/api/v1/cp/' + cp).then(function (res) {
      $scope.errorCP = null;
      $scope.user.estado = res.data.Estado;
      $scope.user.municipio = res.data.Municipio;
      $scope.user.coloniaArray = res.data.Colonia.split(';');
    }, function (error) {
      $scope.errorCP = error.data.error;
    });
  };

  // Valida el horario y desactiva el botton de registro a ticket 
  $scope.validHorario = function () {
    
    /*const date = new Date();
    const hora = date.getHours();
    const minute = date.getMinutes();
    if (hora >= 10  ) return false;
    else return true;*/
    return false;
  }
  $scope.getEstablecimientos = function () {
    $http.get('api/v1/establecimientos/' + $scope['id_promo']).then(function (res) {
      $scope.establecimientos = res.data;
    }, function (err) {
    });
  };

  $scope.addTicket = function (ticket) {
    // console.log(ticket);
    Swal.fire({
        title:"Espera...",
        text:"Estamos enviando tu ticket.",
        imageUrl: 'img/icons/Spinner-1s-200px.gif',
        showConfirmButton:false
    });
    Upload.upload({
        url:'/ticket',
        data:ticket
    })
    .then(function(res){
        Swal.fire({
            title:"¡Todo bien!",
            text:"Tu ticket se ha registrado con éxito",
            confirmButtonText: 'Regresar a mi cuenta',
            showCancelButton: true,
            cancelButtonText: 'Subir otro ticket'
        }).then((result)=>{
            if(result.value){
                console.log(res);
                if (res.data.id_promo === 1) {
                  $window.location.href="/home";
                } else {
                  $window.location.href="/ceys/home";
                }
                //
            } else  {
              $window.location.href="/ticket";
            }
        })
        $ticket = null;
    },function(err){
        Swal.fire({
            type:'error',
            title:'Oh no!, Algo salió mal.',
            text: err.data.error.no_ticket
        })
    })
  };

  var success = function success(data) {
    console.log("aasdlfjk");
    if (data.data['admin'] == true) {
      $window.location.href = '/admin/dashboard';
    } else {
      console.log(data.data);
      if (data.data.id_promo !== undefined) {
        if (data.data.id_promo === 1) {
          console.log("sdaflasdjhf home");
          $window.location.href = '/home';
        } else {
          $window.location.href = '/ceys/';
        }
      } else {
        $window.location.href = '/home';
      }
     
      
    }
  };

  var error = function error(errors) {
    $scope.errors = errors.data.fail;
    Swal.close();
  };
  setTimeout(function() {
    $scope.getEstablecimientos();
  }, 500);
  
});
app.directive("money", function ($filter, $locale) {
  return {
    restrict: 'A',
    require: 'ngModel',
    link: function link(scope, el, attr, ctrl) {
      // format on init
      formatMoney();

      function formatMoney() {
        var value = ctrl.$modelValue; // remove all separaters first

        var groupsep = $locale.NUMBER_FORMATS.GROUP_SEP;
        var re = new RegExp(groupsep, 'g');
        value = String(value).replace(re, ''); // format using angular

        var currencyFilter = $filter('currency');
        var value = currencyFilter(value, ""); // sorry but no cents

        var decimalsep = $locale.NUMBER_FORMATS.DECIMAL_SEP;
        value = value.split(decimalsep)[0]; // render

        ctrl.$viewValue = value;
        ctrl.$render();
      }

      ; // subscribe on changes

      scope.$watch(attr.ngModel, function () {
        formatMoney();
      });
    }
  };
});

/***/ }),

/***/ 1:
/*!************************************************************************!*\
  !*** multi ./resources/assets/js/angular-app/user/user.controllers.js ***!
  \************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/sergirams/Development/ConceptHaus/makken_totaltech/resources/assets/js/angular-app/user/user.controllers.js */"./resources/assets/js/angular-app/user/user.controllers.js");


/***/ })

/******/ });