<a 
class="nav-link bg-info text-white {{ isset($class) ? $class : '' }} none-rounded block" 
data-toggle="collapse" 
href="#{{ $target }}" 
role="button" 
aria-expanded="true" 
aria-controls="{{ $target }}">
    @if(isset($icon))
        <i class="mdi {{ $icon }}"></i>
    @endif
    {{ $name }}
</a>
@if(isset($group))
    <div class="collapse multi-collapse {{ strpos(Route::currentRouteName() , '.webcontent.') ? 'show' : '' }} pl-3" id="{{ $target }}">
        @foreach($group as $el)
        <a class="nav-link none-rounded block" href="{{ route($el->href)}}">
            <i class="mdi {{ $el->icon }}"></i>
            {{ $el->name }}
        </a>
        @endforeach
    </div>
@endif