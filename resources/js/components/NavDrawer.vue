<template>
        <v-navigation-drawer
            :value="getNavDrawerState"
            fixed
            temporary            
            class="y-bg-content"
            height="100vh"
            @transitionend="updateDrawerState"
            persistent
        >
            <v-list nav dense>
                <v-list-item two-line>
                    <v-list-item-avatar>
                        <!-- <img src="@/assets/img/ben_profile_pic.jpg"> -->
                    </v-list-item-avatar>
                    <v-list-item-content>
                        <v-list-item-title>Ben</v-list-item-title>
                        <v-list-item-subtitle>Proffesional coach</v-list-item-subtitle>
                    </v-list-item-content>

                </v-list-item>
                
                <v-divider></v-divider>

                <v-list
                    dense
                    nav
                    >
                    <v-list-item
                        v-for="item in menus"
                        :key="item.name"
                        link
                        @click="$vuetify.goTo(item.target, options)"
                    >
                        <v-list-item-icon>
                            <v-icon>{{ item.icon }}</v-icon>
                        </v-list-item-icon>
                    
                        <v-list-item-content>
                            <v-list-item-title>{{ item.name }}</v-list-item-title>
                        </v-list-item-content>
                    </v-list-item>
                </v-list>
                <v-divider></v-divider>
                <v-list
                    dense
                    nav
                    >
                    <v-list-item
                        v-for="el in contact"
                        :key="el.icon"
                    >
                        <v-list-item-icon>
                            <v-icon>{{ el.icon }}</v-icon>
                        </v-list-item-icon>
                            <v-list-item-title>{{ el.details }}</v-list-item-title>
                        <v-list-item-content>
                        </v-list-item-content>
                    </v-list-item>
                </v-list>
                <v-divider></v-divider>
                <v-list class="py-5">
                    <v-btn 
                        class="mx-3" 
                        fab 
                        dark 
                        :color="el.bg"
                        v-for="el in media"
                        :key="el.name"
                        >
                        <v-icon dark :color="el.color">
                            {{ el.icon }}
                        </v-icon>
                    </v-btn>
                </v-list>
            </v-list>
        </v-navigation-drawer>
</template>
<script>
import { mapGetters, mapActions } from 'vuex'
import vClickOutside from 'v-click-outside'

export default {
    name: 'NavDrawer',
    directives: {
      clickOutside: vClickOutside.directive
    },
    data() {
        return {
            drawerActive: false,
            options: {
                duration: 700,
                offset: 50,
                easing: 'easeOutQuad'
            },
            menus: [
                { name: 'Your objective', icon: '$vuetify.icons.objective', target: '#YourObjective' },
                { name: 'Achive your goal', icon: '$vuetify.icons.star', target: '#AchiveYouGoal' },
                { name: 'Choose your pack', icon: '$vuetify.icons.boxes', target: '#ChooseYourPack' },
                { name: 'Pricing',  icon: '$vuetify.icons.coins', target: '#Pricing' },
                { name: 'Testimonials',  icon: '$vuetify.icons.comments', target: '#Testimonials' },
                { name: 'Contact me',  icon: '$vuetify.icons.phone', target: '#contactMe' }
            ],
            media: [
                { name: 'Facebook', icon: '$vuetify.icons.fb', color: 'white', bg: '#4267B2' },
                { name: 'Youtube', icon: '$vuetify.icons.yt', color: 'red', bg: 'white' },
                { name: 'Email', icon: '$vuetify.icons.envelope', color: 'white', bg: '#2A73C5'}
            ],
            contact: [
                { icon: '$vuetify.icons.mobile', details: '+44 73 66 911 226' },
                { icon: '$vuetify.icons.calendar', details: 'Monday - Friday' },
                { icon: '$vuetify.icons.clock', details: '6:00 - 20:00' },
            ]
        }
    },
    methods: {
        ...mapActions(['setNavDrawerState']),
        updateDrawerState() {
            if(this.getNavDrawerState && this.drawerActive) {
                this.setNavDrawerState(false)
                this.drawerActive = false;
            } else {
                this.drawerActive = true;
            }
        }
    },
    computed: {
        ...mapGetters(['getNavDrawerState']),
    }
}
</script>
<style>
    .v-navigation-drawer {
        background-color: #FFFF !important;
    }
</style>