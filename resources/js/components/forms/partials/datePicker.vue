<template>
    <v-card>
        <v-date-picker 
            v-model="dateOfBirth"
            full-width
            class="no-border"
        >        
        </v-date-picker>
        <v-card-actions>
            <v-spacer></v-spacer>
            <v-btn 
                color="success"
                @click="setDatePickerDialogState(false), setDateOfBirth(dateOfBirth)"
            >Select</v-btn>    
        </v-card-actions>
    </v-card>
</template>
<script>
import { mapActions } from 'vuex';

export default {
    name: "DatePickerDialoq",
    data () {
        return {
            dateOfBirth: new Date().toISOString().substr(0, 10),
        }
    },
    methods: {
        ...mapActions([
            'setDatePickerDialogState',
            'setQuestionaryDetails'
        ]),
        setDateOfBirth(value) {
            this.setQuestionaryDetails({key: 'dateOfBirth', value: value})
        },
        stateValue(key) {
            return this.getStateValue(key)
        }
    }
}
</script>
<style scoped>
  .card-list,
  .theme--light.v-card {
    background-color: #FFF !important;
  }

  .no-border {
    border: #FFF 1px solid !important;
    padding: 10px;
  }
</style>