<v-content id="AchiveYouGoal" class="bg-y">
        <v-layout class="text-center mt-5">
            <v-flex>
                <div class="display-2 py-5 text-b">
                    ACHIEVE YOUR GOALS IN 4 STEPS
                </div>
                <div class="subtitle-2 text-b">
                    CLARITY OF PURPOSE  IS THE ULTIMATE PATH TO SUCCESS
                </div>
            </v-flex>
        </v-layout>
        <v-layout wrap class="card-list">
            @foreach($achiveYourGoals as $key => $card)
            <v-flex xs12 sm6 md3 lg3>
                <v-card flat class="ma-3 card bg-y">
                    <v-card-actions>
                        <v-responsive class="pt-4 text-center">
                            <v-btn fab large 
                            v-on:click="activateAchiveGoalCard({{$key}})" 
                            class="my-4 headline bg-b text-y">
                                {{ $key + 1 }}
                            </v-btn>
                        </v-responsive>
                    </v-card-actions>            
                    <v-expand-transition>
                        <div v-show="$store.getters.getActiveAchiveCard({{$key}})">
                            <v-divider
                                    :inset="false"
                                    horizontal
                                    class="py-5"
                                ></v-divider>
                            <v-card-text>                                
                                I'm a thing. But, like most politicians, he promised more than he could deliver. You won't have time for sleeping, soldier, not with all the bed making you'll be doing. Then we'll go with that data file! Hey, you add a one and two zeros to that or we walk! You're going to do his laundry? I've got to find a way to escape.
                            </v-card-text>
                            <v-divider
                                    :inset="false"
                                    horizontal
                                    class="py-2"
                            ></v-divider>
                        </div>
                    </v-expand-transition>
                    <v-card-text class="text-center text-uppercase font-weight-bold subtitle-1 text-b">
                        {{ $card['title'] }}
                    </v-card-text>
                </v-card>
            </v-flex>
            @endforeach
        </v-layout>
        <v-layout class="your-obj-layout">
            <div class="display-2 text-center py-5 your-obj-title"></div>  
        </v-layout>
    </v-content>