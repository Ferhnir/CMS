<template>
  <v-dialog 
    :value="getFiveWeekQuestionareDialog" 
    max-width="800"
    persistent
    >
    <v-card>
      <v-card-title class="bg-b">
        <span class="subtitle-2 text-y">5 Weeks Consultation Questionnaire</span>
        <v-btn icon dark color="black" v-on:click="setFiveWeekQuestionareDialog(false)" class="pos-top-right">
          <v-icon>$vuetify.icons.close</v-icon>
        </v-btn>
      </v-card-title>
      <v-divider />
      <v-tabs
        center-active
        light 
        show-arrows
        centered
        next-icon="$vuetify.icons.next"
        prev-icon="$vuetify.icons.prev"
        :icons-and-text="true"
      >
        <v-tab 
          v-for="(el, key) in questionaryComponents"
          :key="key"
          :href="`#tab-${key}`"
        >
          {{ progressIcon(key) }}
          {{ el.index }} /  {{ QuestionsSize(questionaryComponents) }}
          <v-icon :color="el.progressIconColor">{{ el.progressIcon }}</v-icon>

        </v-tab>
        <v-tab-item
          v-for="(el, key) in questionaryComponents"
          :key="key"
          :value="'tab-' + key"
        >
          <component v-bind:is="el.component"></component>
        </v-tab-item>
      </v-tabs>
      <v-card-actions class="bg-b text-y">
        <v-btn color="red lighten-1" v-on:click="resetFormAnswers">Reset form</v-btn>
        <v-btn color="green lighten-1" v-on:click="setFiveWeekQuestionareDialog(false)" disabled>Send form</v-btn>
      </v-card-actions>
    </v-card>
  </v-dialog>
</template>
<script>
import { mapGetters, mapActions } from 'vuex'
import vClickOutside from 'v-click-outside'
import _ from 'lodash';

import QuestionIntro from './partials/questionIntro'
import QuestionOne from './partials/questionOne'
import QuestionTwo from './partials/questionTwo'
import QuestionThree from './partials/questionThree'
import QuestionFour from './partials/questionFour'
import QuestionFive from './partials/questionFive'
import AgreeTermsAndCond from './partials/agreeTermsAndCond'

export default {
    name: "FiveWeekQuestionare",
    components: {
      QuestionIntro,
      QuestionOne,
      QuestionTwo,
      QuestionThree,
      QuestionFour,
      QuestionFive,
      AgreeTermsAndCond
    },
    directives: {
      clickOutside: vClickOutside.directive
    },
    data () {
      return {
        stepState: '$vuetify.icons.edit',
        questionaryComponents: {
          setOne: { 
            index: 1, 
            component: 'questionOne', 
            array: ['firstName','lastName', 'dateOfBirth'], 
            progressIcon: '$vuetify.icons.edit', 
            progressIconColor: 'grey' },
          setTwo: { 
            index: 2, 
            component: 'questionTwo', 
            array: ['emailAdress','wayToContact','adviceQuery'], 
            progressIcon: '$vuetify.icons.edit', 
            progressIconColor: 'grey' },
          setThree: { 
            index: 3, 
            component: 'questionThree', 
            array: ['trainingTime','trainingLengthTime','mainGoals'], 
            progressIcon: '$vuetify.icons.edit', 
            progressIconColor: 'grey' },
          setFour: {
            index: 4,
            component: 'questionFour',
            array: ['donateCharity', 'pressingStruggle', 'successfulUntertaking'],
            progressIcon: '$vuetify.icons.edit', 
            progressIconColor: 'grey' },
          setFive: {
            index: 5,
            component: 'questionFive',
            array: ['lastMedicalExam', 'whereShop', 'currentDiet', 'yourCommitment'],
            progressIcon: '$vuetify.icons.edit', 
            progressIconColor: 'grey' },
          setSix: {
            index: 6,
            component: 'agreeTermsAndCond',
            array: ['termsAndCond'],
            progressIcon: '$vuetify.icons.edit', 
            progressIconColor: 'grey' }
        },
        xtest: {
          color: 'grey',
        }
      }
    },
    methods: {
      ...mapActions([
        'setFiveWeekQuestionareDialog',
        'resetFormAnswers'
      ]),
      QuestionsSize(obj) {
        return _.size(obj)
      },
      progressIcon(key) {
          let stateArray = [];

          _.forEach(this.questionaryComponents[key].array, (v) => {
            stateArray.push(this.getFormAnswer(v))
          })

          if(_.every(stateArray)){
            this.questionaryComponents[key].progressIconColor = 'green',
            this.questionaryComponents[key].progressIcon = '$vuetify.icons.check'
          } else if(_.find(stateArray, null)) {
            this.questionaryComponents[key].progressIconColor = 'orange'
            this.questionaryComponents[key].progressIcon = '$vuetify.icons.edit'
          } else {
            this.questionaryComponents[key].progressIconColor = 'grey'
            this.questionaryComponents[key].progressIcon = '$vuetify.icons.edit'
          }
      },
    },
    computed: {
      ...mapGetters([
        'getFiveWeekQuestionareDialog',
        'getFormAnswer',
      ])
    }
}
</script>
<style scoped>
  .pos-top-right{
    position: absolute;
    top: 10px;
    right: 10px;
  }

  .card-list,
  .theme--light.v-card {
    background-color: #FFF !important;
  }

  .no-border {
    border: #FFF 1px solid !important;
    padding: 10px;
  }
</style>