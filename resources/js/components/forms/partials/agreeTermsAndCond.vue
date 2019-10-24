<template>
    <div>
        <div class="title pt-2 pb-2 pl-1">Terms and Conditions</div>
        <v-expansion-panels
            multiple
            focusable
            accordion
            class="pl-2 pr-2"
        >
            <v-expansion-panel
                v-for="termItem in termsList"
                :key="termItem.title"
            >
                <v-expansion-panel-header>
                    <div v-html="termItem.title" class="body-2"></div>
                </v-expansion-panel-header>
                <v-expansion-panel-content>
                    <div v-html="termItem.text" class="caption" style="padding-left: 15px;"></div>
                </v-expansion-panel-content>
            </v-expansion-panel>
        </v-expansion-panels>
        <v-container fluid>
            <v-switch v-model="termsAndCond" :label="`I AGREE TO THE ABOVE TERMS & CONDITIONS`"></v-switch>
        </v-container>
        <v-divider />
    </div>
</template>
<script>
import { mapGetters, mapActions } from 'vuex';

export default {
    name: 'TermsAndConditions',
    data() {
        return {
            termsList: [
                {
                    title: '1. CANCELLATIONS',
                    text: 'Cancellations should be made at least 24 hours in advance of a scheduled session. It will help us give this slot to another person as we strive to help more people shift into their greatness..'
                },
                {
                    title: '2. LATE ARRIVALS',
                    text: 'Each meeting will be 30 minutes in length. Sessions will not be extended (unless time is available) due to the lateness of the client or due to interruptions caused by the client.'
                },                
                {
                    title: '3. ALL THE INFORMATIONS I HAVE GIVEN ARE CORRECT',
                    text: 'All the information on this form is correct and to the best of my knowledge. I have sought and followed any necessary medical advice. I understand that all the information given will be kept confidential.'
                }
            ],
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
        termsAndCond: {
            get() {
                return this.getFormAnswer('termsAndCond')
            },
            set(value) {
                this.setFormAnswer({key: 'termsAndCond', value: value})
            }
        }
    }
}
</script>
<style scoped>
    .v-list {
        padding: 8px !important;
    }
</style>