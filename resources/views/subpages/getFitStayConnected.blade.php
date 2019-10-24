<v-content id="getFitStayConnected" class="bg-y">
        <v-parallax dark src="{{ asset('/images/04-2A.jpg') }}" class="parallax">
                        <v-layout align-center column justify-center text-center>
                            <v-alert style="background: rgba(0,0,0,0.7); text-align: center; max-width:650px;" class="text-y">
                                <h2 class="headline-1">Get fit, Stay Connected</h2>
                                <v-divider :inset="false" horizontal color="#FDD247" class="my-5"></v-divider>
                                <h4 class="headline-4 gap-50-top">
                                    Hold on to the result you have gained with the help of our monthly newsletters,full of tips and advice on how to move to the next level every time.
                                </h4>   
                                <v-btn large color="yellow" class="text-b gap-50-top" v-on:click="showFiveWeekQuestionareNavDrawer(true)">
                                        Subscribe here!
                                    </v-btn>
                            </v-alert>
                        </v-layout>
        </v-parallax>
</v-content>