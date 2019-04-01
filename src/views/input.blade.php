<input 
    type="{{ $type ?? 'text' }}" 
    @isset($id)
        id="{{ $id }}" 
    @endisset
    @isset($name)
        name="{{ $name }}" 
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
    @if(isset($required) && $required)
        required
    @endif
    {{ $extra ?? ''}} >