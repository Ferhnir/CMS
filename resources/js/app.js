require('./bootstrap');

window.Vue = require('vue');
window.$store = require('vuex')

//vuex
import Vuex from 'vuex';
Vue.use(Vuex);
import store from './store.js';

//vuetify
import Vuetify from 'vuetify';
import '@fortawesome/fontawesome-free/css/all.css' // Ensure you are using css-loader
import opts from './icons'
// import 'roboto-fontface/css/roboto/roboto-fontface.css'
Vue.use(Vuetify)

import NavigationDrawer from './components/NavDrawer.vue';

const app = new Vue({    
    store,
    vuetify: new Vuetify(opts),
    components: {
        NavigationDrawer
    },
    el: '#app',
    methods: {
        showNavDrawer: function() {
            store.commit('setNavDrawerState', true)
        }
    }
});