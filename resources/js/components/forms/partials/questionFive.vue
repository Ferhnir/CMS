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
        v-model="lastMedicalExam"
        label="My last full medical examination was on..."
        required
        @click="dialogLastExamDatePicker = true"
      >
      </v-text-field>
      <v-select
        v-model="whereShop"
        :items="ShopsList"
        label="Where do you shop for your food"
        required
        multiple
      >
      </v-select>
      <v-select
        v-model="currentDiet"
        :items="currentDietList"
        label="Your current diet could be best characterized as"
        required
      >
      </v-select>
      <v-select
        v-model="yourCommitment"
        :items="yourCommitmentList"
        label="What will stand in the way of your commitment in the next 5 weeks ?"
        required
        multiple
      >
      </v-select>
      <v-dialog
        v-model="dialogLastExamDatePicker"
        max-width="300px"
        persistent
      >
        <v-date-picker
          v-model="lastMedicalExam"
        ></v-date-picker>
        <v-btn @click="dialogLastExamDatePicker = false" color="success" large>Select</v-btn>
      </v-dialog>
    </v-form>
  </v-card>
</template>
<script>
import { mapGetters, mapActions } from 'vuex';

export default {
  name: "QuestionFive",
  data() {
    return {
      dialogLastExamDatePicker: false,
      ShopsList: ['Asda','Tesco','Lidl','Butcher','Sainsbury','Aldi','Morrisons','Vegetable market'],
      currentDietList: ['Low-fat','Low-carb','High-protein','Vegetarian/Vegan','No special diet'],
      yourCommitmentList: ['Work', 'Family', 'Transport', 'Time', 'Location', 'None above']
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
    whereShop: {
      get() {
        return this.getFormAnswer('whereShop')
      },
      set(value) {
        this.setFormAnswer({key: 'whereShop', value: value})
      }
    },
    currentDiet: {
      get() {
        return this.getFormAnswer('currentDiet')
      },
      set(value) {
        this.setFormAnswer({key: 'currentDiet', value: value})
      }
    },
    lastMedicalExam: {
      get() {
        return this.getFormAnswer('lastMedicalExam')
      },
      set(value) {
        this.setFormAnswer({key: 'lastMedicalExam', value: value})
      }
    },
    yourCommitment: {
      get() {
        return this.getFormAnswer('yourCommitment')
      },
      set(value) {
        this.setFormAnswer({key: 'yourCommitment', value: value})
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