<button type="{{ $type ?? 'button'}}" class="btn btn-{{ $color ?? 'primary' }} {{ $class ?? '' }}"> 
    @isset($icon)
        <i class="{{ $icon }}"></i>     
    @endisset 
    {{ $text ?? '' }}
</button>