<template>
<v-row justify="center">
      <v-dialog v-model="getMapDialogState" fullscreen hide-overlay transition="dialog-bottom-transition">
        <v-card>
          <v-toolbar dark color="primary">
            <h4>Ashton-under-Lyne, OL6 6DJ, Unit 2B, Ashton Retail Park, Wellington Rd</h4>
            <v-spacer></v-spacer>
            <v-btn icon dark v-on:click="setMapDialogState(false)">
              <v-icon v-html="'$vuetify.icons.closecross'" class="text-w"></v-icon>
            </v-btn>
          </v-toolbar>
          <v-list three-line subheader>
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d839.2425566708946!2d-2.0975359031406784!3d53.4910393717304!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf859ec7e9abaf87a!2sPureGym%20Ashton-under-Lyne!5e0!3m2!1sen!2spt!4v1570494483839!5m2!1sen!2spt" frameborder="0" style="border:0; height: 90vh; width: 100%" allowfullscreen="true"></iframe>
          </v-list>
        </v-card>
      </v-dialog>
    </v-row>
</template>

<script>
import { mapGetters, mapActions } from 'vuex';

export default {
    name: "GoogleMap",
    methods: {
        ...mapActions(['setMapDialogState']),
    },
    computed: {
        ...mapGetters(['getMapDialogState']),
    }
}
</script>