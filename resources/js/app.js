require('./bootstrap');

window.Vue = require('vue');
window.$store = require('vuex')

//vuex
import Vuex from 'vuex';
Vue.use(Vuex);
import store from './store.js';

//vuetify
import Vuetify from 'vuetify';
import '@fortawesome/fontawesome-free/css/all.css'
Vue.use(Vuetify)

const opts = {
    icons: {
      iconfont: 'fa4',
      values: {
        menu: 'fas fa-bars',
        objective: 'fas fa-bullseye',
        boxes: 'fas fa-boxes',
        coins: 'fas fa-coins',
        phone: 'fas fa-phone',
        star: 'fas fa-star',
        fb: 'fab fa-facebook-f',
        yt: 'fab fa-youtube',
        envelope: 'fas fa-envelope',
        clock: 'far fa-clock',
        anchor: 'fas fa-anchor',
        heart: 'far fa-heart',
        mobile: 'fas fa-mobile-alt',
        calendar: 'far fa-calendar-alt',
        comments: 'fas fa-comments',
        whatsapp: 'fab fa-whatsapp',
        check: 'fas fa-check-circle',
        question: 'fas-fa-question-circle',
        next: 'fas fa-arrow-right',
        prev: 'fas fa-arrow-left',
        edit: 'fas fa-pen-square',
        googlemap: 'far fa-map',
        closecross: 'fas fa-times'
      }
    }
}

import NavigationDrawer from './components/NavDrawer.vue';
import GoogleMaps from './components/GoogleMap.vue';

const app = new Vue({
    store,
    vuetify: new Vuetify(opts),
    components: {
        NavigationDrawer,
        GoogleMaps
    },
    el: '#app',
    methods: {
        showNavDrawer: () => {
            store.commit('setNavDrawerState', true)
        },
        activateAchiveGoalCard: (index) => {
            store.commit('setActiveAchiveCard', index)            
        },
        showGoogleMapWindow: () => {
            store.commit('setMapDialogState', true)
        }
    }
});