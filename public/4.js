(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[4],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/forms/partials/questionThree.vue?vue&type=script&lang=js&":
/*!***************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/forms/partials/questionThree.vue?vue&type=script&lang=js& ***!
  \***************************************************************************************************************************************************************************************/
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
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
  name: 'QuestionThree',
  data: function data() {
    return {
      trainingTimeList: ['Morning', 'Mid-Day', 'Afternoon', 'Evening'],
      mainGoalsList: ['Loose some weight', 'Reduce my stress level', 'Build some muscles', 'Tone my body']
    };
  },
  methods: _objectSpread({}, Object(vuex__WEBPACK_IMPORTED_MODULE_0__["mapActions"])(['setFormAnswer'])),
  computed: _objectSpread({}, Object(vuex__WEBPACK_IMPORTED_MODULE_0__["mapGetters"])(['getFormAnswer']), {
    trainingTime: {
      get: function get() {
        return this.getFormAnswer('trainingTime');
      },
      set: function set(value) {
        this.setFormAnswer({
          key: 'trainingTime',
          value: value
        });
      }
    },
    trainingLengthTime: {
      get: function get() {
        return this.getFormAnswer('trainingLengthTime');
      },
      set: function set(value) {
        this.setFormAnswer({
          key: 'trainingLengthTime',
          value: value
        });
      }
    },
    mainGoals: {
      get: function get() {
        return this.getFormAnswer('mainGoals');
      },
      set: function set(value) {
        this.setFormAnswer({
          key: 'mainGoals',
          value: value
        });
      }
    }
  })
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/forms/partials/questionThree.vue?vue&type=template&id=91393974&":
/*!*******************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/forms/partials/questionThree.vue?vue&type=template&id=91393974& ***!
  \*******************************************************************************************************************************************************************************************************************************/
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
          _c("v-select", {
            attrs: {
              items: _vm.trainingTimeList,
              label: "At what times during the day would you prefer to train?",
              required: ""
            },
            model: {
              value: _vm.trainingTime,
              callback: function($$v) {
                _vm.trainingTime = $$v
              },
              expression: "trainingTime"
            }
          }),
          _vm._v(" "),
          _c("v-text-field", {
            attrs: {
              counter: 2,
              label:
                "How much time are you willing to allocate for your Exercise per day?"
            },
            model: {
              value: _vm.trainingLengthTime,
              callback: function($$v) {
                _vm.trainingLengthTime = $$v
              },
              expression: "trainingLengthTime"
            }
          }),
          _vm._v(" "),
          _c("v-select", {
            attrs: { items: _vm.mainGoalsList, label: "My main goals are to!" },
            model: {
              value: _vm.mainGoals,
              callback: function($$v) {
                _vm.mainGoals = $$v
              },
              expression: "mainGoals"
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

/***/ "./resources/js/components/forms/partials/questionThree.vue":
/*!******************************************************************!*\
  !*** ./resources/js/components/forms/partials/questionThree.vue ***!
  \******************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _questionThree_vue_vue_type_template_id_91393974___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./questionThree.vue?vue&type=template&id=91393974& */ "./resources/js/components/forms/partials/questionThree.vue?vue&type=template&id=91393974&");
/* harmony import */ var _questionThree_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./questionThree.vue?vue&type=script&lang=js& */ "./resources/js/components/forms/partials/questionThree.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _questionThree_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _questionThree_vue_vue_type_template_id_91393974___WEBPACK_IMPORTED_MODULE_0__["render"],
  _questionThree_vue_vue_type_template_id_91393974___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/forms/partials/questionThree.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/forms/partials/questionThree.vue?vue&type=script&lang=js&":
/*!*******************************************************************************************!*\
  !*** ./resources/js/components/forms/partials/questionThree.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_questionThree_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../node_modules/vue-loader/lib??vue-loader-options!./questionThree.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/forms/partials/questionThree.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_questionThree_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/forms/partials/questionThree.vue?vue&type=template&id=91393974&":
/*!*************************************************************************************************!*\
  !*** ./resources/js/components/forms/partials/questionThree.vue?vue&type=template&id=91393974& ***!
  \*************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_questionThree_vue_vue_type_template_id_91393974___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib??vue-loader-options!./questionThree.vue?vue&type=template&id=91393974& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/forms/partials/questionThree.vue?vue&type=template&id=91393974&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_questionThree_vue_vue_type_template_id_91393974___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_questionThree_vue_vue_type_template_id_91393974___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);