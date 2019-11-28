<nav class="nav flex-column admin-nav">
    @foreach(config('menu.admin') as $nav)
        @if(isset($nav->group))
            @include('admin._include.navigation.navlink-group', [
                'target'    => 'mojTest',
                'name'      =>  $nav->name,
                'group'     =>  $nav->group,
                'icon'      => $nav->icon
            ])
        @elseif(!isset($nav->group))
            @include('admin._include.navigation.navlink', [
                'href'      => route($nav->href),
                'class'     => 'bg-info text-white',
                'link_name' => $nav->name,
                'icon'      => $nav->icon
            ])
        @endif
    @endforeach
</nav>