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

/***/ "./resources/js/backend.js":
/*!*********************************!*\
  !*** ./resources/js/backend.js ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

var event;
var height;
var starter = {
  init: function init() {
    starter.onClick();
    starter.onChange();
    starter.onSubmit();
    starter.onInput();
    starter.formStyled();
  },
  onChange: function onChange() {},
  onInput: function onInput() {
    $(document).on("input", ".input, .textarea", function (e) {
      e.target.value !== "" ? $(this).addClass("has-value").removeClass("no-value") : $(this).removeClass("has-value");
    });
  },
  onClick: function onClick() {
    $(document).on('click', '.bt-table .remove', function () {
      var fields = {};
      var url = $(this).attr('href') + '/' + $(this).data('id');
      var method = 'DELETE';
      var headers = {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        'Authorization': 'Bearer ' + token
      };
      if (method === 'PUT' || method === 'DELETE') {
        headers['X-HTTP-Method-Override'] = method;
      }
      if (confirm('Czy na pewno trwale usunąć ten wpis?') == true) {
        axios({
          method: method,
          url: url,
          headers: headers,
          data: fields
        }).then(function (response) {
          $('.bt-table').bootstrapTable('refresh');
        })["catch"](function (error) {
          $(".error-post").text('');
          if (error.response) {
            alert(error.response.statusText);
          } else if (error.request) {
            // The request was made but no response was received
            // `error.request` is an instance of XMLHttpRequest in the browser and an instance of
            // http.ClientRequest in node.js
            console.log(error.request);
          } else {
            // Something happened in setting up the request that triggered an Error
            console.log('Error', error.message);
          }
        });
      }
      return false;
    });
  },
  onSubmit: function onSubmit() {
    $(document).on('submit', 'form.save', function () {
      var fields = starter.getFields($(this));
      var url = $(this).attr('action');
      var method = $(this).attr('method');
      var headers = {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        'Authorization': 'Bearer ' + token
      };
      if (method === 'PUT' || method === 'DELETE') {
        headers['X-HTTP-Method-Override'] = method;
      }
      axios({
        method: method,
        url: url,
        headers: headers,
        data: fields
      }).then(function (response) {
        window.location = response.data.results.url;
      })["catch"](function (error) {
        $(".error-post").text('');
        if (error.response) {
          Object.keys(error.response.data.errors).map(function (item) {
            $(".error-".concat(item)).text(error.response.data.errors[item][0]);
          });
        } else if (error.request) {
          // The request was made but no response was received
          // `error.request` is an instance of XMLHttpRequest in the browser and an instance of
          // http.ClientRequest in node.js
          console.log(error.request);
        } else {
          // Something happened in setting up the request that triggered an Error
          console.log('Error', error.message);
        }
      });
      return false;
    });
  },
  formStyled: function formStyled() {
    $(".input").find("~ .error:not(:empty)").siblings(".input").addClass("no-value");
    $('.input:not(.select):not([value=""])').addClass("has-value");
    $(".textarea").find("~ .error:not(:empty)").siblings(".textarea").addClass("no-value");
    $(".textarea:not(:empty)").addClass("has-value");
    $("select.input.select").each(function (index, element) {
      $(element).find('option').each(function () {
        if ($(this).is(':selected') && $(this).is('[value]') && $(this).attr('value') !== '') {
          $(element).addClass('has-value');
        }
      });
    });
  },
  getFields: function getFields($form) {
    var inputs = $form.find('.input');
    var textareas = $form.find('.textarea');
    var checkboxes = $form.find('.checkbox');
    var files = $form.find('.file');
    var fields = {};
    $.each(inputs, function (index, item) {
      fields[$(item).attr('name')] = $(item).val();
    });
    $.each(textareas, function (index, item) {
      fields[$(item).attr('name')] = $(item).val();
    });
    $.each(checkboxes, function (index, item) {
      if ($(item).prop('checked')) {
        fields[$(item).attr('name')] = $(item).val();
      }
    });
    $.each(files, function (index, item) {
      if (item.files[0]) {
        fields[$(item).attr('name')] = item.files[0];
      }
    });
    fields['_token'] = $form.find('input[name=_token]').val();
    return fields;
  }
};
$(window).on("load", function (e) {
  event = e || window.event;
  starter.init();
});

/***/ }),

/***/ 1:
/*!***************************************!*\
  !*** multi ./resources/js/backend.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /var/www/html/resources/js/backend.js */"./resources/js/backend.js");


/***/ })

/******/ });
