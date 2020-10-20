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
/******/ 	return __webpack_require__(__webpack_require__.s = 8);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/angular-app/admin/admin.services.js":
/*!*****************************************************************!*\
  !*** ./resources/assets/js/angular-app/admin/admin.services.js ***!
  \*****************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/**
 *  Module
 *
 * Description
 */
var app = angular.module('AdminFactory', ['angularApp']);
app.factory('AdminFactory', function ($http) {
  return {
    register: function register(data) {
      return $http({
        method: 'POST',
        url: '/registro',
        data: data
      });
    },
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
    ticketsUsuarios: function ticketsUsuarios() {
      return $http({
        method: 'GET',
        url: '/api/v1/ticketsUsuarios'
      });
    },
    setPosibleGanadorGanador: function setPosibleGanadorGanador(data) {
      return $http({
        method: 'POST',
        url: '/posibleganador',
        data: data
      });
    },
    setGanador: function setGanador(data) {
      return $http({
        method: 'POST',
        url: '/ganador',
        data: data
      });
    },
    deleteTicket: function deleteTicket(data) {
      return $http({
        method: 'POST',
        url: '/ticket/delete',
        data: data
      });
    },
    editTicket: function editTicket(data) {
      return $http({
        method: 'POST',
        url: '/ticket/monto',
        data: data
      });
    },
    editTicketDate: function editTicketDate(data) {
      return $http({
        method: 'POST',
        url: '/ticket/fecha',
        data: data
      });
    },
    dashboard: function dashboard() {
      return $http({
        method: 'GET',
        url: '/api/v1/dashboard'
      });
    }
  };
});

/***/ }),

/***/ 8:
/*!***********************************************************************!*\
  !*** multi ./resources/assets/js/angular-app/admin/admin.services.js ***!
  \***********************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/sergioramos/Development/Projects/makken_totaltech/resources/assets/js/angular-app/admin/admin.services.js */"./resources/assets/js/angular-app/admin/admin.services.js");


/***/ })

/******/ });