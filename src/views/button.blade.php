<button 
    type="{{ $type ?? 'button'}}" 
    class="btn btn-{{ $color ?? 'primary' }} {{ $class ?? '' }}"
    @isset($id)
    id="{{ $id }}"   
    @endisset
    > 
    @isset($icon)
        <i class="{{ $icon }}"></i>     
    @endisset 
    {{ $text ?? '' }}
</button>