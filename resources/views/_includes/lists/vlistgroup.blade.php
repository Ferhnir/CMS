<v-list-group
    no-action
    prepend-icon="{{ $icon }}"
>
    <template v-slot:activator>
        <v-list-item-title>{{ $title }}</v-list-item-title>
    </template>
    @foreach ($item->group as $el)
        @include('_includes.lists.vlistitem', 
        [
        'link' => true, 
        'icon' => $el->icon, 
        'title' => $el->name,
        'href' => $el->target,
        'icon_after' => true
        ]
    )        
    @endforeach
</v-list-group>