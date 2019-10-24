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
                <v-text-field
                  v-model="donateCharity"
                  :counter="30"
                  label="If you were to donate to a charity,which will it be?"
                  required
                >
                </v-text-field>
                <v-textarea
                  v-model="pressingStruggle"
                  label="My most pressing struggle at the moment is:"
                >
                </v-textarea>
                <v-textarea
                  v-model="successfulUntertaking"
                  label="My most successful undertaking was"
                >
                </v-textarea>
              </v-form>
          </v-card>
</template>
<script>
import { mapGetters, mapActions } from 'vuex'

export default {
  name: 'QuestionFour',
  data() {
    return {
      list: [
        {id: 1, option: 'Phone call'},
        {id: 2, option: 'Text message'},
        {id: 3, option: 'Email'}
      ],
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
    donateCharity: {
      get() {
        return this.getFormAnswer('donateCharity')
      },
      set(value) {
        this.setFormAnswer({key: 'donateCharity', value: value})
      }
    },
    pressingStruggle: {
      get() {
        return this.getFormAnswer('pressingStruggle')
      },
      set(value) {
        this.setFormAnswer({key: 'pressingStruggle', value: value})
      }
    },
    successfulUntertaking: {
      get() {
        return this.getFormAnswer('successfulUntertaking')
      },
      set(value) {
        this.setFormAnswer({key: 'successfulUntertaking', value: value})
      }
    }
  }
}
</script>