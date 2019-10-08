<v-content id="YourObjective" grid-list-xl class="bg-b">
        <v-layout class="your-obj-layout gap-50-top">
            <v-flex>
                <div class="display-2 text-center text-y py-5">
                    WHAT IS YOUR OBJECTIVE?
                </div>  
            </v-flex>  
        </v-layout>
        <v-layout wrap class="card-list bg-y my-5 gap-50-top gap-50-bottom">
            @foreach($yourObjCards as $key => $card)
                <v-flex xs12 sm6 md3 lg3>
                    <v-card flat class="ma-3 card bg-y">
                        <v-responsive class="pt-4 text-center">
                            <v-btn fab large class="my-4 bg-b" v-on:click="$vuetify.goTo('#ChooseYourPack')">
                                <v-icon class="text-y">{{ $card['icon'] }}</v-icon>
                            </v-btn>
                        </v-responsive>
                        <v-card-text class="text-center text-uppercase font-weight-bold title" color="black">
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