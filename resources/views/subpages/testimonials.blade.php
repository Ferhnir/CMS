<v-content id="Testimonials" class="bg-b py-5 pb-12">
        <v-divider :inset="false" horizontal color="#FDD247"></v-divider>
        <v-layout class="text-center mt-5 py-5 pb-12 bb-b">
            <v-flex>
                <div class="display-3 text-y py-5">
                    Look who has made it
                </div>
            </v-flex>
        </v-layout>
        <v-layout wrap class="card-list text-center mt-5 bg-y">
            @foreach($testimoniales as $person)
            <v-flex xs12 sm6 md4 lg4>
                <v-card class="ma-3 card bg-b" max-width="400">                
                    <v-card-text class="subtitle-1 text-left font-weight-light font-italic">
                        "{{ $person['desc'] }}"
                    </v-card-text>
                
                    <v-card-actions>
                        <v-list-item class="text-left text-y">
                            <v-list-item-avatar color="grey darken-3">
                                <v-img class="elevation-6" src="{{ asset('/images/avatars/'. $person['avatar']) }}"></v-img>
                            </v-list-item-avatar>
                    
                            <v-list-item-content>
                                <v-list-item-title class="text-y">{{ $person['name'] }}</v-list-item-title>
                                <v-list-item-title class="text-y">{{ $person['proff'] }}</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-card-actions>
                </v-card>
            </v-flex>
            @endforeach
        </v-layout>
        <v-layout wrap class="card-list text-center mt-5 bg-b">
            <v-flex xs12 sm12 md12 lg12>
                <v-btn>Load more...</v-btn>
            </v-flex>
        </v-layout>
    </v-content>