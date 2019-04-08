<div class="form-group @isset($errors) {{ $errors->has($name) ? 'has-error' : '' }} @endisset() {{ $class ?? '' }}">
    @isset($label)
    <label for="{{ $id ?? '' }}">{{ $label }}</label>
    @endisset()

    <textarea 
        class="form-control"
        name="{{ $name }}"
        @isset($id)
        id="{{ $id }}" 
        @endisset 
        rows="{{ $rows ?? '5' }}"
        @isset($cols)
        cols="{{ $cols ?? '' }}"
        @endisset
        @isset($maxlength)
        maxlength={{$maxlength}}
        @endisset
        @isset($minlength)
        minlength={{$minlength}}
        @endisset
        @isset($autofocus)
        autofocus
        @endisset
        @if(isset($required) && $required)
        required
        @endif
        placeholder="{{ $placeholder ?? '' }}"
        {{ $extra ?? ''}}>{{ $value ?? '' }}</textarea>

    @include('form::_errors')
</div>