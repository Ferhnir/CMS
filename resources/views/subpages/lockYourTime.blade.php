<v-content id="lockYourTime">
    <div class="bg-blue-opacity-low">
            <v-container grid-list-md   >
                <v-row justify="center" class="gap-50-top">
                    <v-col md="6">
                        <h1 class="display-1 text-y">{{ $lockYourTime['header'] }}</h1>
                        <v-list class="gap-20-top bg-none" color="transparent">
                            <v-list-item-group>
                                @foreach($lockYourTime['list'] as $key => $value)
                                <v-list-item>
                                    <v-icon class="text-y">$vuetify.icons.xxx</v-icon>
                                    <v-list-item-content style="padding-left: 10px;">
                                        <v-list-item-title v-text="'{{ $value }}'" class="text-y"></v-list-item-title>
                                    </v-list-item-content>
                                </v-list-item>
                                @endforeach
                            </v-list-item-group>
                        </v-list>
                    </v-col>
                </v-row>
            </v-container>    
            <v-layout>
                <v-flex>
                    <v-layout column align-center>
                        <v-btn large color="pink" class="text-w" v-on:click="showFiveWeekQuestionareNavDrawer(true)">
                            Get your qutoe today!
                        </v-btn>
                    </v-layout>
                </v-flex>
            </v-layout>
    </div>
</v-content>