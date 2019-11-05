<v-content id="ChooseYourPack" class="bg-b pb-5">
        <v-layout class="text-center mt-5 pb-5">
            <v-flex>
                <div class="display-2 text-center text-y py-5">
                    DISCOVER THE PACK THAT REPRESENTS YOU!
                </div>
            </v-flex>
        </v-layout>
        <v-layout wrap class="card-list bg-b">
            @foreach($chooseYourPack['cards'] as $key => $card)
            <v-flex xs12 sm6 md4 lg4>
                <v-card flat dark class="ma-3 card bg-b">
                    <v-responsive class="pt-4 text-center">
                        <v-img src="{{ asset('/images/packs/' . $card['img']) }}" />
                    </v-responsive>
                    <v-card-text class="text-center text-uppercase font-weight-bold subtitle-2 text-y">
                        {{ $card['title'] }}
                        <div class="caption">
                            {{ $card['subtitle'] }}
                        </div>  
                    </v-card-text>
                </v-card>
            </v-flex>
            @endforeach
        </v-layout>
    </v-content>