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
                  v-model="email_adress"
                  :counter="30"
                  label="Email adress"
                  required
                >
                </v-text-field>
                <v-select
                  v-model="wayToContact"
                  :items="list"
                  item-text="option"
                  label="I prefer to be contacted via?"
                >
                </v-select>
                <v-select
                  v-model="adviceQuery"
                  :items="['yes', 'no']"
                  label="Would like to receive personalized advice, tips and articles from us?"
                >
                </v-select>
              </v-form>
          </v-card>
</template>
<script>
import { mapGetters, mapActions } from 'vuex'

export default {
  name: 'QuestionTwo',
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
    email_adress: {
      get() {
        return this.getFormAnswer('emailAdress')
      },
      set(value) {
        this.setFormAnswer({key: 'emailAdress', value: value})
      }
    },
    wayToContact: {
      get() {
        return this.getFormAnswer('wayToContact')
      },
      set(value) {
        this.setFormAnswer({key: 'wayToContact', value: value})
      }
    },
    adviceQuery: {
      get() {
        return this.getFormAnswer('adviceQuery')
      },
      set(value) {
        this.setFormAnswer({key: 'adviceQuery', value: value})
      }
    }
  }
}
</script>