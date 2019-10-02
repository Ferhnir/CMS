    
const state = {
    navdrawer: false,
    mapDialog: false,
    contactDialog: false,
};

const getters = {
    getNavDrawerState: (state) => state.navdrawer,
    getMapDialogState: (state) => state.mapDialog,
    getContactDialogState: (state) => state.contactDialog,
};

const actions = {
    async setNavDrawerState({ commit }, boolean) {
        commit('setNavDrawerState', boolean);
    },
    async setMapDialogState({ commit }, boolean) {
        commit('setMapDialogState', boolean)
    },
    async setContactDialogState({ commit }, boolean) {
        commit('setContactDialogState', boolean)
    },
};

const mutations = {
    setNavDrawerState: (state, boolean) => (state.navdrawer = boolean),
    setMapDialogState: (state, boolean) => (state.mapDialog = boolean),
    setContactDialogState: (state, boolean) => (state.contactDialog = boolean),
};

export default {
    state,
    getters,
    actions,
    mutations
}