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
        <v-layout id="Pricing" class="text-center mt-5">
            <v-flex>
                <div class="display-2 text-center py-5 text-y">
                    THE COST OF SUCCESS
                </div>
                <div class="subtitle-1 text-center py-5 text-y">
                    Enjoy the cost of success or pay the price of failure
                </div>
            </v-flex>
        </v-layout>
        <v-layout wrap class="card-list bg-y">
            @foreach($chooseYourPack['packs'] as $key => $pack)
            <v-flex xs12 sm6 md4 lg4>
                <v-card flat class="ma-3 card {{ ($key % 2) == 0 ? 'bg-y' : 'bg-b' }}" elevation="10">
                    <v-card-text class="text-center text-uppercase font-weight-bold subtitle-2" v-html="'{{ $pack['title'] }}'"></v-card-text>
                    <v-card-text class="text-center text-uppercase display-3" v-html="'{{ $pack['price'] }}'"></v-card-text>
                    <v-card-text class="text-center text-uppercase display-1">per month </v-card-text>
                    <v-card-text class="text-center text-uppercase subtitle-2">
                        <v-list class="{{ ($key % 2) == 0 ? 'bg-y' : 'bg-b' }}">
                            @foreach($pack['details'] as $item)
                            <v-list-item class="{{ ($key % 2) == 0 ? 'bg-y text-b' : 'bg-b text-y' }}">
                                <v-list-item-content>
                                    <v-list-item-title>{{ $item }}</v-list-item-title>
                                </v-list-item-content>
                            </v-list-item>
                        @endforeach
                        </v-list>
                        <div class="text-center my-5">
                            <v-btn rounded light color="bttn-bg-pink" class="text-b" large>GET STARTED</v-btn>
                        </div>
                    </v-card-text>
                </v-card>
            </v-flex>
            @endforeach
        </v-layout>
    </v-content>