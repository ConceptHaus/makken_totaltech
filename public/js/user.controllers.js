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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/angular-app/user/user.controllers.js":
/***/ (function(module, exports) {

/**
 *  Module
 *
 * Description
 */
var app = angular.module('userController', ['angularApp']);

app.controller("userCtrl", function ($scope, UserFactory, $http, $window, Upload, CSRF_TOKEN) {

    $scope.login = function (user) {
        console.log(user);
        swal({
            title: 'Espera...',
            text: 'Estamos verificando tus datos.',
            imageUrl: 'img/icons/Spinner-1s-200px.gif',
            showConfirmButton: false
        });
        UserFactory.login(user).then(success, error);
    };
    $scope.register = function (user) {
        console.log(user);
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
            console.log($scope.user);
        }, function (error) {
            $scope.errorCP = error.data.error;
            console.log($scope.errorCP);
        });
    };
    $scope.getEstablecimientos = function () {
        $http.get('api/v1/establecimientos').then(function (res) {
            $scope.establecimientos = res.data;
            console.log($scope.establecimientos);
        }, function (err) {
            console.log(err);
        });
    };
    $scope.addTicket = function (ticket) {
        console.log(ticket);
        swal({
            title: "Espera...",
            text: "Estamos enviando tu ticket.",
            imageUrl: 'img/icons/Spinner-1s-200px.gif',
            showConfirmButton: false
        });
        Upload.upload({
            url: '/ticket',
            data: ticket
        }).then(function (res) {
            swal({
                title: "¡Todo bien!",
                text: "Tu ticket se ha registrado con éxito",
                confirmButtonText: 'Regresar a mi cuenta',
                showCancelButton: true,
                cancelButtonText: 'Subir otro ticket'
            }).then(function (result) {
                if (result.value) {
                    $window.location.href = "/home";
                }
            });
            console.log(res.data);
            $ticket = null;
        }, function (err) {
            swal({
                type: 'error',
                title: 'Oh no!',
                text: 'Algo salió mal.'
            });
            console.log(err.data);
        });
    };
    var success = function success(data) {
        console.log(data.data);
        if (data.data['admin'] == true) {
            $window.location.href = '/admin/usuarios/registrados';
        } else {
            $window.location.href = '/home';
        }
    };

    var error = function error(errors) {
        $scope.errors = errors.data.fail;
        swal.close();
        console.log(errors.data.fail);
    };
    $scope.getEstablecimientos();
});

/***/ }),

/***/ 1:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__("./resources/assets/js/angular-app/user/user.controllers.js");


/***/ })

/******/ });