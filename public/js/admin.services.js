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
/******/ 	return __webpack_require__(__webpack_require__.s = 6);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/angular-app/admin/admin.services.js":
/***/ (function(module, exports) {


throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/Users/HausMaster/Desktop/JAVIER/PROYECTOS/makken_totaltech/resources/assets/js/angular-app/admin/admin.services.js'");

/**
 *  Module
 *
 * Description
 */
var app = angular.module('AdminFactory', ['angularApp']);

app.factory('AdminFactory', function ($http) {
    return {
        allUsers: function allUsers() {
            return $http({
                method: 'GET',
                url: '/api/v1/users'
            });
        },
        oneUser: function oneUser(id) {
            return $http({
                method: 'GET',
                url: '/api/v1/users/' + id
            });
        },
        establecimientos: function establecimientos() {
            return $http({
                method: 'GET',
                url: '/api/v1/establecimientos'
            });
        },
        ganadores: function ganadores() {
            return $http({
                method: 'GET',
                url: '/api/v1/ganadores'
            });
        },
        tickets: function tickets() {
            return $http({
                method: 'GET',
                url: '/api/v1/tickets'
            });
        },
        setGanador: function setGanador(data) {
            return $http({
                method: 'POST',
                url: '/ganador',
                data: data
            });
        }
    };
});


/***/ }),

/***/ 6:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__("./resources/assets/js/angular-app/admin/admin.services.js");


/***/ })

/******/ });
