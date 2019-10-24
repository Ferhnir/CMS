<template>
    <v-card
            flat
            tile
            class="no-border"
          >
              
              <v-form
                ref="form"
                :lazy-validation="false"
              >
                <v-select
                  v-model="trainingTime"
                  :items="trainingTimeList"
                  label="At what times during the day would you prefer to train?"
                  required
                >
                </v-select>
                <v-text-field
                  v-model="trainingLengthTime"
                  :counter="2"
                  label="How much time are you willing to allocate for your Exercise per day?"
                >
                </v-text-field>
                <v-select
                  v-model="mainGoals"
                  :items="mainGoalsList"
                  label="My main goals are to!"
                >
                </v-select>
              </v-form>
          </v-card>
</template>
<script>
import { mapGetters, mapActions } from 'vuex'

export default {
  name: 'QuestionThree',
  data() {
    return {
      trainingTimeList: [
        'Morning','Mid-Day','Afternoon','Evening'
      ],
      mainGoalsList: [
        'Loose some weight','Reduce my stress level','Build some muscles','Tone my body'
      ]
    }
  },
  methods: {
    ...mapActions([
      'setFormAnswer'
    ])
  },
  computed: {
    ...mapGetters([
      'getFormAnswer'
    ]),
    trainingTime: {
      get() {
        return this.getFormAnswer('trainingTime')
      },
      set(value) {
        this.setFormAnswer({key: 'trainingTime', value: value})
      }
    },
    trainingLengthTime: {
      get() {
        return this.getFormAnswer('trainingLengthTime')
      },
      set(value) {
        this.setFormAnswer({key: 'trainingLengthTime', value: value})
      }
    },
    mainGoals: {
      get() {
        return this.getFormAnswer('mainGoals')
      },
      set(value) {
        this.setFormAnswer({key: 'mainGoals', value: value})
      }
    }
  }
}
</script>