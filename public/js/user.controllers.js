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

app.controller("userCtrl", function ($scope, UserFactory, $http, $window, CSRF_TOKEN) {

    $scope.login = function (user) {
        console.log(user);
        swal({
            title: 'Espera...',
            text: 'Estamos verificando tus datos.',
            showConfirmButton: false
        });
        UserFactory.login(user).then(success, error);
    };
    $scope.register = function (user) {
        console.log(user);
        swal({
            title: 'Espera...',
            text: 'Estamos verificando tus datos.',
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
            $scope.estableciemientos = res.data;
            console.log($scope.estableciemientos);
        }, function (err) {
            console.log(err);
        });
    };
    var success = function success(data) {
        console.log(data.data);
        $window.location.href = '/home';
    };

    var error = function error(errors) {
        $scope.errors = errors.data.fail;
        swal.close();
        console.log(errors.data.fail);
    };
});

/***/ }),

/***/ 1:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__("./resources/assets/js/angular-app/user/user.controllers.js");


/***/ })

/******/ });