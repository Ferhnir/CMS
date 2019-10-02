import Vue from 'vue';
import Vuex from 'vuex';

import bttnActions from './store/buttonActions.js';
// import fiveQuestionare from './store/fiveQuestionare.js';

Vue.use(Vuex);

export default new Vuex.Store({
  modules: {
    bttnActions,
    // fiveQuestionare
  }
});