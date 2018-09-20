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

/***/ "./resources/assets/js/angular-app/admin/admin.controllers.js":
/***/ (function(module, exports) {

/**
 *  Module
 *
 * Description
 */
var app = angular.module('adminController', ['angularApp']);

app.run(function (amMoment) {
    amMoment.changeLocale('es');
});

app.controller("adminCtrl", function ($scope, AdminFactory, $http, $window, Upload, CSRF_TOKEN) {
    // Usuarios registrados  
    AdminFactory.allUsers().then(function (res) {
        $scope.usuarios = res.data;
        console.log('Usuarios');
    }, function (err) {
        console.log(err);
    });

    // Usuarios Ganadores  
    AdminFactory.ganadores().then(function (res) {
        console.log('Ganadores');
        $scope.ganadores = res.data;
        console.log($scope.ganadores);
    }, function (err) {
        console.log(err);
    });

    // Usuario detalle  
    AdminFactory.oneUser().then(function (res) {
        $scope.usuario = res.data;
        console.log('Usuario Detalle');
        console.log($scope.usuario);
    }, function (err) {
        console.log(err);
    });

    // Tickets
    AdminFactory.tickets().then(function (res) {
        $scope.tickets = res.data;
        console.log('Tickets');
        console.log($scope.tickets);
    }, function (err) {
        console.log(err);
    });

    // Establecimientos
    AdminFactory.establecimientos().then(function (res) {
        $scope.establecimientos = res.data;
        console.log('Establecimientos');
        console.log($scope.establecimientos);
    }, function (err) {
        console.log(err);
    });

    $scope.addTicket = function (ticket) {
        console.log(ticket);
        swal({
            title: "Espera...",
            text: "Estamos enviando tu ticket.",
            imageUrl: '/img/icons/Spinner-1s-200px.gif',
            showConfirmButton: false
        });
        Upload.upload({
            url: '/adminTicket',
            data: ticket
        }).then(function (res) {
            swal({
                title: '¡Todo bien!',
                text: 'Tu ticket se ha registrado con éxito',
                confirmButtonText: 'Aceptar'
            });
            $scope.ticket = {};
            $('.img-default-ticket').attr('src', '/img/icons/camera-blue.svg');
        }, function (err) {
            swal({
                type: 'error',
                title: 'Oh no!',
                text: 'Algo salió mal.'
            });
            console.log(err.data);
        });
    };

    var readUrl = function readUrl(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.img-default-ticket').attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    };
    $('#nuevoticket').change(function () {
        readUrl(this);
    });

    $scope.addGanador = function (ticket) {
        console.log(ticket);
        swal({
            title: "Espera...",
            text: "Estamos agregando al ganador",
            imageUrl: '/img/icons/Spinner-1s-200px.gif',
            showConfirmButton: false
        });
        AdminFactory.setGanador(ticket).then(function (data) {
            swal({
                type: 'success',
                title: "¡Listo!",
                text: "El ticket " + data.data.ticket + " es ganador"
            }).then(function (result) {
                location.reload();
            });
            console.log(data.data);
        }, function (err) {
            swal({
                type: 'error',
                title: '¡Oh no!',
                text: err.data
            });
            console.log(err);
        });
    };
});

/***/ }),

/***/ 5:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__("./resources/assets/js/angular-app/admin/admin.controllers.js");


/***/ })

/******/ });