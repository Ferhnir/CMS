<v-content>
                <v-app-bar color="black" dark class="toolbar">
                    <v-btn height="45" color="#000">
                        <v-img src="{{ asset('/images/mbfit-logo.jpg') }}" width="80px" height="45"/>
                    </v-btn>
                    <v-spacer></v-spacer>
                    <v-btn color="black"  v-on:click="showNavDrawer" class="ma-2">
                        MENU
                        <v-icon right class="v-icon-y">$vuetify.icons.menu</v-icon>
                    </v-btn>
                </v-app-bar>
                <navigation-drawer/>
</v-content>   