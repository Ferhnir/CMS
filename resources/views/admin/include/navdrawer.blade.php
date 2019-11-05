<div style="width: 260px; position: fixed; top: 0px; left: 0px; z-index: 4; border-right: 1px solid; border-color: rgba(0,0,0,0.12);">
  <v-list dense height="100vh">
    <v-list-item>
      <v-list-item-avatar>
        <v-img src="https://randomuser.me/api/portraits/men/85.jpg"></v-img>
      </v-list-item-avatar>    
      <v-list-item-title>John Leider</v-list-item-title>
    </v-list-item>
    <v-divider></v-divider>
    @include('_includes.lists.vlistitem', 
      [
        'link' => true, 
        'icon' => 'mdi-home', 
        'title' => 'Home',
        'href' => route('admin.index.show'),
        'icon_after' => false
      ]
    )
    @foreach (config('menu.admin') as $item)       
      @include((!empty($item->group) ? '_includes.lists.vlistgroup' : '_includes.lists.vlistitem'), 
        [
          'link' => !empty($item->group), 
          'icon' => $item->icon, 
          'title' => $item->name,
          'icon_after' => $item->icon_after
        ]
      )
    @endforeach
  </v-list>
</div>