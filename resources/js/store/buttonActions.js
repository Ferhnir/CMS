    
const state = {
    navdrawer: false,
    achiveCard: {
        0: false,
        1: false,
        2: false,
        3: false
    },
    mapDialog: false,
    // contactDialog: false,
};

const getters = {
    getNavDrawerState: (state) => state.navdrawer,
    getActiveAchiveCard: (state) => index => state.achiveCard[index],
    getMapDialogState: (state) => state.mapDialog,
    // getContactDialogState: (state) => state.contactDialog,
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
    // async setContactDialogState({ commit }, boolean) {
    //     commit('setContactDialogState', boolean)
    // },
};

const mutations = {
    setNavDrawerState: (state, boolean) => (state.navdrawer = boolean),
    setActiveAchiveCard: (state, index) => (state.achiveCard[index] = !state.achiveCard[index]),
    setMapDialogState: (state, boolean) => (state.mapDialog = boolean),
    // setContactDialogState: (state, boolean) => (state.contactDialog = boolean),
};

export default {
    state,
    getters,
    actions,
    mutations
}