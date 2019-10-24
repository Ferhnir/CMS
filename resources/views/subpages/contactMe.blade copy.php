<v-content id="ContactMe" class="bg-y">
    <v-container grid-list-md style="max-width: 800px;">
        <v-card max-width="100%" class="mx-auto" color="white">
            <v-row py-4 pl-4 row wrap align-center>
                <v-col md6>
                    <v-responsive max-width="350" class="mx-auto">                        
                        <img src="{{ asset('/images/profile/ben.jpg') }}" style="max-width: 350px;"/>
                    </v-responsive>
                </v-col>
                <v-col md6 class="text-center contant-bttns" style="min-width: 350px;">
                    <v-row align="center">
                        <v-col cols="12" sm="12" class="pr-5 pl-5">
                            <div class="text-center">
                                <div class="my-2">
                                    <v-alert border="bottom" colored-border elevation="2" >
                                        <h4>PUREGYM <br/>Ashton-under-Lyne</h4>
                                    </v-alert>
                                    <v-alert border="bottom" colored-border elevation="1" >
                                        <h6>Unit 2B, Ashton Retail Park, Wellington Rd<br />
                                        Ashton-under-Lyne OL6 6DJ</h6>
                                    </v-alert>
                                </div>
                                <div class="my-4">
                                    <v-btn v-on:click="showGoogleMapWindow()">
                                    <v-icon left v-html="'$vuetify.icons.googlemap'"></v-icon> GoogleMaps
                                    </v-btn>
                                </div>
                                @foreach($contact as $element)                                    
                                    <div class="my-4">
                                        <v-btn href="{{ $element['target']}}">
                                            <v-icon left>
                                                {{ $element['icon'] }}    
                                            </v-icon>{{ $element['title'] }}
                                        </v-btn>
                                    </div> 
                                @endforeach
                            </div>    
                        </v-col>
                    </v-row>
                </v-col>
            </v-row>
        </v-card>
        <google-maps/>
    </v-container>
</v-content>