<v-content id="CustomizedCoaching">
    <v-parallax dark src="{{ asset('/images/your-goal.jpg') }}" class="parallax">
        <v-layout>
            <v-flex>
                <div style="height: 350px;">
                    <v-layout align-end justify-end column fill-height>
                        <div class="boxm">
                            <span class="display-1 font-weight-bold">
                                CUSTOMIZED COACHING TO
                            </span>
                            <h2 class="display-3 font-weight-bold py-5">ACHIEVE YOUR GOALS</h2>
                        </div>
                    </v-layout>
                </div>        
            </v-flex>
        </v-layout>
        <v-layout py-5>
            <v-flex>
                <v-layout column align-center>
                    <v-btn large color="yellow" class="text-b" v-on:click="showFiveWeekQuestionareNavDrawer(true)">
                        Get your qutoe today!
                    </v-btn>
                </v-layout>
            </v-flex>
        </v-layout>
    </v-parallax>
</v-content>