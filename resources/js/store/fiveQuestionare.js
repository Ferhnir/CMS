const state = {
    formAnswers: {
        firstName: null,
        lastName: null,
        dateOfBirth: null,
        emailAdress: null,
        wayToContact: null,
        adviceQuery: null,
        trainingTime: null,
        trainingLengthTime: null,
        mainGoals: null,
        donateCharity: null,
        pressingStruggle: null,
        successfulUntertaking: null,
        lastMedicalExam: null,
        whereShop: null,
        currentDiet: null,
        yourCommitment: null,
        termsAndCond: false
    }
}

const getters = {
    getFormAnswer: (state) => key => state.formAnswers[key],
}

const actions = {
    async setFormAnswer({ commit }, data) {
        commit('setFormAnswer', data)
    },
    resetFormAnswers({ commit }) {
        commit('resetFormAnswers')
    } 
}

const mutations = {
    setFormAnswer: (state, data) => (state.formAnswers[data.key] = data.value),
    resetFormAnswers: (state) => Object.keys(state.formAnswers).forEach(key => {
        state.formAnswers[key] = null
    })
}

export default {
    state,
    getters,
    actions,
    mutations
}