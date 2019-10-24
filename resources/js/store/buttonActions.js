    
const state = {
    navdrawer: false,
    achiveCard: {
        0: false,
        1: false,
        2: false,
        3: false
    },
    mapDialog: false,
    fiveWeekQuestionareDialog: false,
};

const getters = {
    getNavDrawerState: (state) => state.navdrawer,
    getActiveAchiveCard: (state) => index => state.achiveCard[index],
    getMapDialogState: (state) => state.mapDialog,
    getFiveWeekQuestionareDialog: (state) => state.fiveWeekQuestionareDialog,
};

const actions = {
    async setNavDrawerState({ commit }, boolean) {
        commit('setNavDrawerState', boolean);
    },
    async setActiveAchiveCard({ commit }, index) {
        commit('setActiveAchiveCard', index)
    },
    async setMapDialogState({ commit }, boolean) {
        commit('setMapDialogState', boolean)
    },
    async setFiveWeekQuestionareDialog({ commit }, boolean) {
        commit('setFiveWeekQuestionareDialog', boolean)
    },
};

const mutations = {
    setNavDrawerState: (state, boolean) => (state.navdrawer = boolean),
    setActiveAchiveCard: (state, index) => (state.achiveCard[index] = !state.achiveCard[index]),
    setMapDialogState: (state, boolean) => (state.mapDialog = boolean),
    setFiveWeekQuestionareDialog: (state, boolean) => (state.fiveWeekQuestionareDialog = boolean),
};

export default {
    state,
    getters,
    actions,
    mutations
}