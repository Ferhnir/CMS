<v-content>       
        <v-parallax dark src="{{ asset('/images/coach-img.jpg') }}" class="parallax">
            <v-layout align-center column justify-center text-center>
                <h1 class="intro-text font-weight-thin text-y mb-4">
                    <b>PERSONAL</b><br/>
                    FITNESS COACHING
                </h1>
                <h4 class="subheading text-y py-2 my-2">
                    WE ARE NOT THE SHOUTING TYPE, WE RATHER YOU TEST US BELOW
                </h4>
                <v-btn light rounded class="bg-y" v-on:click="showFiveWeekQuestionareNavDrawer(true)">
                    CLAIM YOUR YOUR FREE 5 DAY CLARITY CONSULT
                </v-btn>
            </v-layout>
        </v-parallax>
        <five-week-questionare/> 
    </v-content>