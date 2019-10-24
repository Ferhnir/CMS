(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[0],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/forms/partials/agreeTermsAndCond.vue?vue&type=script&lang=js&":
/*!*******************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/forms/partials/agreeTermsAndCond.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************************************************************************************************************************/
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

/* harmony default export */ __webpack_exports__["default"] = ({
  name: 'TermsAndConditions',
  data: function data() {
    return {
      termsList: [{
        title: '1. CANCELLATIONS',
        text: 'Cancellations should be made at least 24 hours in advance of a scheduled session. It will help us give this slot to another person as we strive to help more people shift into their greatness..'
      }, {
        title: '2. LATE ARRIVALS',
        text: 'Each meeting will be 30 minutes in length. Sessions will not be extended (unless time is available) due to the lateness of the client or due to interruptions caused by the client.'
      }, {
        title: '3. ALL THE INFORMATIONS I HAVE GIVEN ARE CORRECT',
        text: 'All the information on this form is correct and to the best of my knowledge. I have sought and followed any necessary medical advice. I understand that all the information given will be kept confidential.'
      }]
    };
  },
  methods: _objectSpread({}, Object(vuex__WEBPACK_IMPORTED_MODULE_0__["mapActions"])(['setFormAnswer'])),
  computed: _objectSpread({}, Object(vuex__WEBPACK_IMPORTED_MODULE_0__["mapGetters"])(['getFormAnswer']), {
    termsAndCond: {
      get: function get() {
        return this.getFormAnswer('termsAndCond');
      },
      set: function set(value) {
        this.setFormAnswer({
          key: 'termsAndCond',
          value: value
        });
      }
    }
  })
});

/***/ }),

/***/ "./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/forms/partials/agreeTermsAndCond.vue?vue&type=style&index=0&id=15651a68&scoped=true&lang=css&":
/*!**************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader??ref--6-1!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--6-2!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/forms/partials/agreeTermsAndCond.vue?vue&type=style&index=0&id=15651a68&scoped=true&lang=css& ***!
  \**************************************************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(/*! ../../../../../node_modules/css-loader/lib/css-base.js */ "./node_modules/css-loader/lib/css-base.js")(false);
// imports


// module
exports.push([module.i, "\n.v-list[data-v-15651a68] {\n    padding: 8px !important;\n}\n", ""]);

// exports


/***/ }),

/***/ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/forms/partials/agreeTermsAndCond.vue?vue&type=style&index=0&id=15651a68&scoped=true&lang=css&":
/*!******************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/style-loader!./node_modules/css-loader??ref--6-1!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--6-2!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/forms/partials/agreeTermsAndCond.vue?vue&type=style&index=0&id=15651a68&scoped=true&lang=css& ***!
  \******************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {


var content = __webpack_require__(/*! !../../../../../node_modules/css-loader??ref--6-1!../../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../../node_modules/postcss-loader/src??ref--6-2!../../../../../node_modules/vue-loader/lib??vue-loader-options!./agreeTermsAndCond.vue?vue&type=style&index=0&id=15651a68&scoped=true&lang=css& */ "./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/forms/partials/agreeTermsAndCond.vue?vue&type=style&index=0&id=15651a68&scoped=true&lang=css&");

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

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/forms/partials/agreeTermsAndCond.vue?vue&type=template&id=15651a68&scoped=true&":
/*!***********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/forms/partials/agreeTermsAndCond.vue?vue&type=template&id=15651a68&scoped=true& ***!
  \***********************************************************************************************************************************************************************************************************************************************/
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
    "div",
    [
      _c("div", { staticClass: "title pt-2 pb-2 pl-1" }, [
        _vm._v("Terms and Conditions")
      ]),
      _vm._v(" "),
      _c(
        "v-expansion-panels",
        {
          staticClass: "pl-2 pr-2",
          attrs: { multiple: "", focusable: "", accordion: "" }
        },
        _vm._l(_vm.termsList, function(termItem) {
          return _c(
            "v-expansion-panel",
            { key: termItem.title },
            [
              _c("v-expansion-panel-header", [
                _c("div", {
                  staticClass: "body-2",
                  domProps: { innerHTML: _vm._s(termItem.title) }
                })
              ]),
              _vm._v(" "),
              _c("v-expansion-panel-content", [
                _c("div", {
                  staticClass: "caption",
                  staticStyle: { "padding-left": "15px" },
                  domProps: { innerHTML: _vm._s(termItem.text) }
                })
              ])
            ],
            1
          )
        }),
        1
      ),
      _vm._v(" "),
      _c(
        "v-container",
        { attrs: { fluid: "" } },
        [
          _c("v-switch", {
            attrs: { label: "I AGREE TO THE ABOVE TERMS & CONDITIONS" },
            model: {
              value: _vm.termsAndCond,
              callback: function($$v) {
                _vm.termsAndCond = $$v
              },
              expression: "termsAndCond"
            }
          })
        ],
        1
      ),
      _vm._v(" "),
      _c("v-divider")
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./resources/js/components/forms/partials/agreeTermsAndCond.vue":
/*!**********************************************************************!*\
  !*** ./resources/js/components/forms/partials/agreeTermsAndCond.vue ***!
  \**********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _agreeTermsAndCond_vue_vue_type_template_id_15651a68_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./agreeTermsAndCond.vue?vue&type=template&id=15651a68&scoped=true& */ "./resources/js/components/forms/partials/agreeTermsAndCond.vue?vue&type=template&id=15651a68&scoped=true&");
/* harmony import */ var _agreeTermsAndCond_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./agreeTermsAndCond.vue?vue&type=script&lang=js& */ "./resources/js/components/forms/partials/agreeTermsAndCond.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _agreeTermsAndCond_vue_vue_type_style_index_0_id_15651a68_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./agreeTermsAndCond.vue?vue&type=style&index=0&id=15651a68&scoped=true&lang=css& */ "./resources/js/components/forms/partials/agreeTermsAndCond.vue?vue&type=style&index=0&id=15651a68&scoped=true&lang=css&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");






/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__["default"])(
  _agreeTermsAndCond_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _agreeTermsAndCond_vue_vue_type_template_id_15651a68_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _agreeTermsAndCond_vue_vue_type_template_id_15651a68_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "15651a68",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/forms/partials/agreeTermsAndCond.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/forms/partials/agreeTermsAndCond.vue?vue&type=script&lang=js&":
/*!***********************************************************************************************!*\
  !*** ./resources/js/components/forms/partials/agreeTermsAndCond.vue?vue&type=script&lang=js& ***!
  \***********************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_agreeTermsAndCond_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../node_modules/vue-loader/lib??vue-loader-options!./agreeTermsAndCond.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/forms/partials/agreeTermsAndCond.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_agreeTermsAndCond_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/forms/partials/agreeTermsAndCond.vue?vue&type=style&index=0&id=15651a68&scoped=true&lang=css&":
/*!*******************************************************************************************************************************!*\
  !*** ./resources/js/components/forms/partials/agreeTermsAndCond.vue?vue&type=style&index=0&id=15651a68&scoped=true&lang=css& ***!
  \*******************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_agreeTermsAndCond_vue_vue_type_style_index_0_id_15651a68_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/style-loader!../../../../../node_modules/css-loader??ref--6-1!../../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../../node_modules/postcss-loader/src??ref--6-2!../../../../../node_modules/vue-loader/lib??vue-loader-options!./agreeTermsAndCond.vue?vue&type=style&index=0&id=15651a68&scoped=true&lang=css& */ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/forms/partials/agreeTermsAndCond.vue?vue&type=style&index=0&id=15651a68&scoped=true&lang=css&");
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_agreeTermsAndCond_vue_vue_type_style_index_0_id_15651a68_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_agreeTermsAndCond_vue_vue_type_style_index_0_id_15651a68_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_agreeTermsAndCond_vue_vue_type_style_index_0_id_15651a68_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__) if(__WEBPACK_IMPORT_KEY__ !== 'default') (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_agreeTermsAndCond_vue_vue_type_style_index_0_id_15651a68_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));
 /* harmony default export */ __webpack_exports__["default"] = (_node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_agreeTermsAndCond_vue_vue_type_style_index_0_id_15651a68_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0___default.a); 

/***/ }),

/***/ "./resources/js/components/forms/partials/agreeTermsAndCond.vue?vue&type=template&id=15651a68&scoped=true&":
/*!*****************************************************************************************************************!*\
  !*** ./resources/js/components/forms/partials/agreeTermsAndCond.vue?vue&type=template&id=15651a68&scoped=true& ***!
  \*****************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_agreeTermsAndCond_vue_vue_type_template_id_15651a68_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib??vue-loader-options!./agreeTermsAndCond.vue?vue&type=template&id=15651a68&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/forms/partials/agreeTermsAndCond.vue?vue&type=template&id=15651a68&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_agreeTermsAndCond_vue_vue_type_template_id_15651a68_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_agreeTermsAndCond_vue_vue_type_template_id_15651a68_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);