
@isset($icon)
    <div class="input-{{ isset($icon['flat']) && $icon['flat'] ? 'icon' : 'group' }}">
    @if(isset($icon['side']))
        @if($icon['side'] != 'right')
            @include('form::_input_icon')
        @endif
    @else
        @include('form::_input_icon')
    @endif
@endisset
<input
    type="{{ $type ?? 'text' }}"
    @isset($id)
        id="{{ $id }}"
    @endisset
    @isset($name)
        name="{{ $name }}"
    @endisset
    @isset($disabled)
    disabled
    @endisset
    class="form-control {{ $class ?? '' }}"
    value="{{ old($name, $value ?? '') }}"
    placeholder="{{ $placeholder ?? '' }}"
    @isset($maxlength)
        maxlength={{$maxlength}}
    @endisset
    @isset($minlength)
        minlength={{$minlength}}
    @endisset
    @isset($min)
        min={{$min}}
    @endisset
    @isset($max)
        max={{$max}}
    @endisset
    @if(isset($required) && $required)
        required
    @endif
    {{ $extra ?? ''}} >
@isset($icon)
    @if(isset($icon['side']) && $icon['side'] == 'right')
        @include('form::_input_icon')
    @endif
    </div>
@endisset
@include('form::_errors')
