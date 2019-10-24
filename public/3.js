(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[3],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/forms/partials/questionFour.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/forms/partials/questionFour.vue?vue&type=script&lang=js& ***!
  \**************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var vuex__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vuex */ "./node_modules/vuex/dist/vuex.esm.js");
function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); if (enumerableOnly) symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; }); keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i] != null ? arguments[i] : {}; if (i % 2) { ownKeys(source, true).forEach(function (key) { _defineProperty(target, key, source[key]); }); } else if (Object.getOwnPropertyDescriptors) { Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)); } else { ownKeys(source).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } } return target; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
  name: 'QuestionFour',
  data: function data() {
    return {
      list: [{
        id: 1,
        option: 'Phone call'
      }, {
        id: 2,
        option: 'Text message'
      }, {
        id: 3,
        option: 'Email'
      }]
    };
  },
  methods: _objectSpread({}, Object(vuex__WEBPACK_IMPORTED_MODULE_0__["mapActions"])(['setFormAnswer'])),
  computed: _objectSpread({}, Object(vuex__WEBPACK_IMPORTED_MODULE_0__["mapGetters"])(['getFormAnswer']), {
    donateCharity: {
      get: function get() {
        return this.getFormAnswer('donateCharity');
      },
      set: function set(value) {
        this.setFormAnswer({
          key: 'donateCharity',
          value: value
        });
      }
    },
    pressingStruggle: {
      get: function get() {
        return this.getFormAnswer('pressingStruggle');
      },
      set: function set(value) {
        this.setFormAnswer({
          key: 'pressingStruggle',
          value: value
        });
      }
    },
    successfulUntertaking: {
      get: function get() {
        return this.getFormAnswer('successfulUntertaking');
      },
      set: function set(value) {
        this.setFormAnswer({
          key: 'successfulUntertaking',
          value: value
        });
      }
    }
  })
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/forms/partials/questionFour.vue?vue&type=template&id=92459ea4&":
/*!******************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/forms/partials/questionFour.vue?vue&type=template&id=92459ea4& ***!
  \******************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "v-card",
    { staticClass: "no-border", attrs: { flat: "", tile: "" } },
    [
      _c(
        "v-form",
        { ref: "form", attrs: { "lazy-validation": false } },
        [
          _c("v-text-field", {
            attrs: {
              counter: 30,
              label: "If you were to donate to a charity,which will it be?",
              required: ""
            },
            model: {
              value: _vm.donateCharity,
              callback: function($$v) {
                _vm.donateCharity = $$v
              },
              expression: "donateCharity"
            }
          }),
          _vm._v(" "),
          _c("v-textarea", {
            attrs: { label: "My most pressing struggle at the moment is:" },
            model: {
              value: _vm.pressingStruggle,
              callback: function($$v) {
                _vm.pressingStruggle = $$v
              },
              expression: "pressingStruggle"
            }
          }),
          _vm._v(" "),
          _c("v-textarea", {
            attrs: { label: "My most successful undertaking was" },
            model: {
              value: _vm.successfulUntertaking,
              callback: function($$v) {
                _vm.successfulUntertaking = $$v
              },
              expression: "successfulUntertaking"
            }
          })
        ],
        1
      )
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./resources/js/components/forms/partials/questionFour.vue":
/*!*****************************************************************!*\
  !*** ./resources/js/components/forms/partials/questionFour.vue ***!
  \*****************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _questionFour_vue_vue_type_template_id_92459ea4___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./questionFour.vue?vue&type=template&id=92459ea4& */ "./resources/js/components/forms/partials/questionFour.vue?vue&type=template&id=92459ea4&");
/* harmony import */ var _questionFour_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./questionFour.vue?vue&type=script&lang=js& */ "./resources/js/components/forms/partials/questionFour.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _questionFour_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _questionFour_vue_vue_type_template_id_92459ea4___WEBPACK_IMPORTED_MODULE_0__["render"],
  _questionFour_vue_vue_type_template_id_92459ea4___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/forms/partials/questionFour.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/forms/partials/questionFour.vue?vue&type=script&lang=js&":
/*!******************************************************************************************!*\
  !*** ./resources/js/components/forms/partials/questionFour.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_questionFour_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../node_modules/vue-loader/lib??vue-loader-options!./questionFour.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/forms/partials/questionFour.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_questionFour_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/forms/partials/questionFour.vue?vue&type=template&id=92459ea4&":
/*!************************************************************************************************!*\
  !*** ./resources/js/components/forms/partials/questionFour.vue?vue&type=template&id=92459ea4& ***!
  \************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_questionFour_vue_vue_type_template_id_92459ea4___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib??vue-loader-options!./questionFour.vue?vue&type=template&id=92459ea4& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/forms/partials/questionFour.vue?vue&type=template&id=92459ea4&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_questionFour_vue_vue_type_template_id_92459ea4___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_questionFour_vue_vue_type_template_id_92459ea4___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);