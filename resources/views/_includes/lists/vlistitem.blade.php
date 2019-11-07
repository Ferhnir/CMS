<v-list-item link href="{{ $href ?? '' }}">
    @if ($icon_after)
        <v-list-item-title>{{ $title }}</v-list-item-title>
    @endif
    @if($icon)
        <v-list-item-icon>
            <v-icon>{{ $icon }}</v-icon>
        </v-list-item-icon>
    @endif
    @if(!$icon_after)
        <v-list-item-title>{{ $title }}</v-list-item-title>
    @endif    
</v-list-item>