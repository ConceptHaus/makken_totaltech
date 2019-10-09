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
/******/ 	return __webpack_require__(__webpack_require__.s = 5);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/angular-app/forgotPassword/forgotPassword.controllers.js":
/***/ (function(module, exports) {

/**
 *  Module
 *
 * Description
 */
var app = angular.module('forgotPasswordController', ['angularApp']);

app.controller("ForgotPasswordCtrl", function ($scope, ForgotFactory, $http, $window, Upload, CSRF_TOKEN) {
    $scope.forgot2 = function (correo) {
        //console.log(user);
        swal({
            title: 'Espera...',
            text: 'Estamos verificando tus datos.',
            imageUrl: '../img/icons/Spinner-1s-200px.gif',
            showConfirmButton: false
        });
        ForgotFactory.forgot(correo).then(function (res) {
            swal({
                title: "¡Todo bien!",
                text: "Revisa tu correo electrónico",
                confirmButtonText: 'Iniciar Sesión'
            }).then(function (result) {
                if (result.value) {
                    $window.location.href = "/login";
                }
            });
        }, function (err) {
            console.log(err);
            swal({
                title: "¡Ups algo salio mal!",
                text: err.data.fail.correo,
                confirmButtonText: 'Regresar',
                showCancelButton: true,
                cancelButtonText: 'Intentar nuevamente'
            }).then(function (result) {
                if (result.value) {
                    $window.location.href = "/";
                }
            });
        });
    };

    $scope.reset = function (resetP) {
        console.log(resetP);
        swal({
            title: 'Espera...',
            text: 'Estamos verificando tus datos.',
            imageUrl: '../img/icons/Spinner-1s-200px.gif',
            showConfirmButton: false
        });
        ForgotFactory.reset2(resetP).then(function (res) {
            swal({
                title: "¡Todo bien!",
                text: "Tu contraseña ha sido restablecida",
                confirmButtonText: 'Ir a Mi Cuenta'
            }).then(function (result) {
                if (result.value) {
                    $window.location.href = "/home";
                }
            });
        }, function (err) {
            console.log(err);
            swal({
                title: "¡Ups algo salio mal!",
                text: "Intenta nuevamente",
                confirmButtonText: 'Regresar',
                showCancelButton: true,
                cancelButtonText: 'Intentar nuevamente'
            }).then(function (result) {
                if (result.value) {
                    $window.location.href = "/";
                }
            });
        });
    };
});

/***/ }),

/***/ 5:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__("./resources/assets/js/angular-app/forgotPassword/forgotPassword.controllers.js");


/***/ })

/******/ });