require('./bootstrap');
window.Vue = require('vue');

import Vuetify from 'vuetify';
Vue.use(Vuetify)

const app = new Vue({
    vuetify: new Vuetify(),
    el: '#app'
});