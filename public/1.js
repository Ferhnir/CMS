(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[1],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/forms/partials/questionFive.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/forms/partials/questionFive.vue?vue&type=script&lang=js& ***!
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
  name: "QuestionFive",
  data: function data() {
    return {
      dialogLastExamDatePicker: false,
      ShopsList: ['Asda', 'Tesco', 'Lidl', 'Butcher', 'Sainsbury', 'Aldi', 'Morrisons', 'Vegetable market'],
      currentDietList: ['Low-fat', 'Low-carb', 'High-protein', 'Vegetarian/Vegan', 'No special diet'],
      yourCommitmentList: ['Work', 'Family', 'Transport', 'Time', 'Location', 'None above']
    };
  },
  methods: _objectSpread({}, Object(vuex__WEBPACK_IMPORTED_MODULE_0__["mapActions"])(['setFormAnswer'])),
  computed: _objectSpread({}, Object(vuex__WEBPACK_IMPORTED_MODULE_0__["mapGetters"])(['getFormAnswer']), {
    whereShop: {
      get: function get() {
        return this.getFormAnswer('whereShop');
      },
      set: function set(value) {
        this.setFormAnswer({
          key: 'whereShop',
          value: value
        });
      }
    },
    currentDiet: {
      get: function get() {
        return this.getFormAnswer('currentDiet');
      },
      set: function set(value) {
        this.setFormAnswer({
          key: 'currentDiet',
          value: value
        });
      }
    },
    lastMedicalExam: {
      get: function get() {
        return this.getFormAnswer('lastMedicalExam');
      },
      set: function set(value) {
        this.setFormAnswer({
          key: 'lastMedicalExam',
          value: value
        });
      }
    },
    yourCommitment: {
      get: function get() {
        return this.getFormAnswer('yourCommitment');
      },
      set: function set(value) {
        this.setFormAnswer({
          key: 'yourCommitment',
          value: value
        });
      }
    }
  })
});

/***/ }),

/***/ "./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/forms/partials/questionFive.vue?vue&type=style&index=0&id=7a75743a&scoped=true&lang=css&":
/*!*********************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader??ref--6-1!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--6-2!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/forms/partials/questionFive.vue?vue&type=style&index=0&id=7a75743a&scoped=true&lang=css& ***!
  \*********************************************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(/*! ../../../../../node_modules/css-loader/lib/css-base.js */ "./node_modules/css-loader/lib/css-base.js")(false);
// imports


// module
exports.push([module.i, "\n.card-list[data-v-7a75743a],\n.theme--light.v-card[data-v-7a75743a] {\n  background-color: #FFF !important;\n}\n", ""]);

// exports


/***/ }),

/***/ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/forms/partials/questionFive.vue?vue&type=style&index=0&id=7a75743a&scoped=true&lang=css&":
/*!*************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/style-loader!./node_modules/css-loader??ref--6-1!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--6-2!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/forms/partials/questionFive.vue?vue&type=style&index=0&id=7a75743a&scoped=true&lang=css& ***!
  \*************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {


var content = __webpack_require__(/*! !../../../../../node_modules/css-loader??ref--6-1!../../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../../node_modules/postcss-loader/src??ref--6-2!../../../../../node_modules/vue-loader/lib??vue-loader-options!./questionFive.vue?vue&type=style&index=0&id=7a75743a&scoped=true&lang=css& */ "./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/forms/partials/questionFive.vue?vue&type=style&index=0&id=7a75743a&scoped=true&lang=css&");

if(typeof content === 'string') content = [[module.i, content, '']];

var transform;
var insertInto;



var options = {"hmr":true}

options.transform = transform
options.insertInto = undefined;

var update = __webpack_require__(/*! ../../../../../node_modules/style-loader/lib/addStyles.js */ "./node_modules/style-loader/lib/addStyles.js")(content, options);

if(content.locals) module.exports = content.locals;

if(false) {}

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/forms/partials/questionFive.vue?vue&type=template&id=7a75743a&scoped=true&":
/*!******************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/forms/partials/questionFive.vue?vue&type=template&id=7a75743a&scoped=true& ***!
  \******************************************************************************************************************************************************************************************************************************************/
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
              label: "My last full medical examination was on...",
              required: ""
            },
            on: {
              click: function($event) {
                _vm.dialogLastExamDatePicker = true
              }
            },
            model: {
              value: _vm.lastMedicalExam,
              callback: function($$v) {
                _vm.lastMedicalExam = $$v
              },
              expression: "lastMedicalExam"
            }
          }),
          _vm._v(" "),
          _c("v-select", {
            attrs: {
              items: _vm.ShopsList,
              label: "Where do you shop for your food",
              required: "",
              multiple: ""
            },
            model: {
              value: _vm.whereShop,
              callback: function($$v) {
                _vm.whereShop = $$v
              },
              expression: "whereShop"
            }
          }),
          _vm._v(" "),
          _c("v-select", {
            attrs: {
              items: _vm.currentDietList,
              label: "Your current diet could be best characterized as",
              required: ""
            },
            model: {
              value: _vm.currentDiet,
              callback: function($$v) {
                _vm.currentDiet = $$v
              },
              expression: "currentDiet"
            }
          }),
          _vm._v(" "),
          _c("v-select", {
            attrs: {
              items: _vm.yourCommitmentList,
              label:
                "What will stand in the way of your commitment in the next 5 weeks ?",
              required: "",
              multiple: ""
            },
            model: {
              value: _vm.yourCommitment,
              callback: function($$v) {
                _vm.yourCommitment = $$v
              },
              expression: "yourCommitment"
            }
          }),
          _vm._v(" "),
          _c(
            "v-dialog",
            {
              attrs: { "max-width": "300px", persistent: "" },
              model: {
                value: _vm.dialogLastExamDatePicker,
                callback: function($$v) {
                  _vm.dialogLastExamDatePicker = $$v
                },
                expression: "dialogLastExamDatePicker"
              }
            },
            [
              _c("v-date-picker", {
                model: {
                  value: _vm.lastMedicalExam,
                  callback: function($$v) {
                    _vm.lastMedicalExam = $$v
                  },
                  expression: "lastMedicalExam"
                }
              }),
              _vm._v(" "),
              _c(
                "v-btn",
                {
                  attrs: { color: "success", large: "" },
                  on: {
                    click: function($event) {
                      _vm.dialogLastExamDatePicker = false
                    }
                  }
                },
                [_vm._v("Select")]
              )
            ],
            1
          )
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

/***/ "./resources/js/components/forms/partials/questionFive.vue":
/*!*****************************************************************!*\
  !*** ./resources/js/components/forms/partials/questionFive.vue ***!
  \*****************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _questionFive_vue_vue_type_template_id_7a75743a_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./questionFive.vue?vue&type=template&id=7a75743a&scoped=true& */ "./resources/js/components/forms/partials/questionFive.vue?vue&type=template&id=7a75743a&scoped=true&");
/* harmony import */ var _questionFive_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./questionFive.vue?vue&type=script&lang=js& */ "./resources/js/components/forms/partials/questionFive.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _questionFive_vue_vue_type_style_index_0_id_7a75743a_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./questionFive.vue?vue&type=style&index=0&id=7a75743a&scoped=true&lang=css& */ "./resources/js/components/forms/partials/questionFive.vue?vue&type=style&index=0&id=7a75743a&scoped=true&lang=css&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");






/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__["default"])(
  _questionFive_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _questionFive_vue_vue_type_template_id_7a75743a_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _questionFive_vue_vue_type_template_id_7a75743a_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "7a75743a",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/forms/partials/questionFive.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/forms/partials/questionFive.vue?vue&type=script&lang=js&":
/*!******************************************************************************************!*\
  !*** ./resources/js/components/forms/partials/questionFive.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_questionFive_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../node_modules/vue-loader/lib??vue-loader-options!./questionFive.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/forms/partials/questionFive.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_questionFive_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/forms/partials/questionFive.vue?vue&type=style&index=0&id=7a75743a&scoped=true&lang=css&":
/*!**************************************************************************************************************************!*\
  !*** ./resources/js/components/forms/partials/questionFive.vue?vue&type=style&index=0&id=7a75743a&scoped=true&lang=css& ***!
  \**************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_questionFive_vue_vue_type_style_index_0_id_7a75743a_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/style-loader!../../../../../node_modules/css-loader??ref--6-1!../../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../../node_modules/postcss-loader/src??ref--6-2!../../../../../node_modules/vue-loader/lib??vue-loader-options!./questionFive.vue?vue&type=style&index=0&id=7a75743a&scoped=true&lang=css& */ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/forms/partials/questionFive.vue?vue&type=style&index=0&id=7a75743a&scoped=true&lang=css&");
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_questionFive_vue_vue_type_style_index_0_id_7a75743a_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_questionFive_vue_vue_type_style_index_0_id_7a75743a_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_questionFive_vue_vue_type_style_index_0_id_7a75743a_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__) if(__WEBPACK_IMPORT_KEY__ !== 'default') (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_questionFive_vue_vue_type_style_index_0_id_7a75743a_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));
 /* harmony default export */ __webpack_exports__["default"] = (_node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_questionFive_vue_vue_type_style_index_0_id_7a75743a_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0___default.a); 

/***/ }),

/***/ "./resources/js/components/forms/partials/questionFive.vue?vue&type=template&id=7a75743a&scoped=true&":
/*!************************************************************************************************************!*\
  !*** ./resources/js/components/forms/partials/questionFive.vue?vue&type=template&id=7a75743a&scoped=true& ***!
  \************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_questionFive_vue_vue_type_template_id_7a75743a_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib??vue-loader-options!./questionFive.vue?vue&type=template&id=7a75743a&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/forms/partials/questionFive.vue?vue&type=template&id=7a75743a&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_questionFive_vue_vue_type_template_id_7a75743a_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_questionFive_vue_vue_type_template_id_7a75743a_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);