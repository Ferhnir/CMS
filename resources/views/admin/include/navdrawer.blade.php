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
        'href' => route('admin.dashboard.index'),
        'icon_after' => false
      ]
    )
    @foreach (config('menu.admin') as $item)
      @if(empty($item->group))
        @include('_includes.lists.vlistitem',
          [
            'link' => true,
            'title' => $item->name,
            'icon' => $item->icon,
            'href' => route($item->href),
            'icon_after' => $item->icon_after
          ]
        )       
      @else
        @include('_includes.lists.vlistgroup',
          [
            'title' => $item->name,
            'icon' => $item->icon,
            'icon_after' => $item->icon_after,
            'items' => $item->group
          ]
        )
      @endif
    @endforeach
  </v-list>
</div>