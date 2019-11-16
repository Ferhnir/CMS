<v-btn-toggle rounded>
    <v-btn 
      type="submit" 
      color="blue lighten-2"
      name="target"
      value="up"
      @if($first == true && $order_value <= 1) disabled @endif
      small
    >
      <v-icon color="white">mdi-menu-up</v-icon>
    </v-btn>
    <v-btn disabled small>
        {{ $order_value ? $order_value : '-' }}
    </v-btn>
    <v-btn 
      type="submit"
      color="blue lighten-2"
      name="target"
      value="down"
      small
      >
      <v-icon color="white">mdi-menu-down</v-icon>
    </v-btn>
</v-btn-toggle>