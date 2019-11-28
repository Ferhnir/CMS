<button 
    type="{{ $type }}" 
    class="btn {{ isset($css_class) ? $css_class : ''}} btn-sm"
    style="min-width: 50px;"
    @if(isset($data_togle))
        data-toggle="{{ $data_togle }}" 
        {{ isset($type) ?? $type }} aria-haspopup="true" 
        {{ isset($type) ?? $type }} aria-expanded="false"
    @endif
    @if(isset($name) && isset($value))
        name="{{ $name }}"
        value="{{ $value }}"
    @endif
    @if(isset($disabled) && $disabled == true)
        disabled
    @endif
>
    @if(isset($icon))
        <icon class="mdi {{ $icon }}"></icon>
    @endif
    {{ isset($title) ? $title : ''}}
</button>