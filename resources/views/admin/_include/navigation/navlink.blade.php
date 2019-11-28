<a class="nav-link {{ isset($class) ? $class : '' }} {{ isset($active) ? 'active' : ''}}" href="{{ $href }}">
    @if(isset($icon))
        <i class="mdi {{ $icon }}"></i>
    @endif
    {{ $link_name }}
</a>