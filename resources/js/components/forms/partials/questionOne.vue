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
        v-model="first_name"
        :counter="18"
        label="First name"
        required
      >
      </v-text-field>
      <v-text-field
        v-model="last_name"
        :counter="18"
        label="Last name"
        required
      >
      </v-text-field>
      <v-text-field
        v-model="date_of_birth"
        label="Date of birth"
        required
        @click="dialogDatePicker = true"
        :disabled="dialogDatePicker"
      >
      </v-text-field>
      <v-dialog
        v-model="dialogDatePicker"
        max-width="300px"
        persistent
      >
        <v-date-picker
          v-model="date_of_birth"
        ></v-date-picker>
        <v-btn @click="dialogDatePicker = false" color="success" large>Select</v-btn>
      </v-dialog>
    </v-form>
  </v-card>
</template>
<script>
import { mapGetters, mapActions } from 'vuex';

export default {
  name: "QuestionOne",
  data() {
    return {
      dialogDatePicker: false,
    }
  },
  methods: {
    ...mapActions([
      'setFormAnswer'
    ]),
  },
  computed: {
    ...mapGetters([
      'getFormAnswer'
    ]),
    first_name: {
      get() {
        return this.getFormAnswer('firstName')
      },
      set(value) {
        this.setFormAnswer({key: 'firstName', value: value})
      }
    },
    last_name: {
      get() {
        return this.getFormAnswer('lastName')
      },
      set(value) {
        this.setFormAnswer({key: 'lastName', value: value})
      }
    },
    date_of_birth: {
      get() {
        return this.getFormAnswer('dateOfBirth')
      },
      set(value) {
        this.setFormAnswer({key: 'dateOfBirth', value: value})
      }
    }
  }
}
</script>

<style scoped>
  .card-list,
  .theme--light.v-card {
    background-color: #FFF !important;
  }
</style>