<div class="form-check 
    @isset($errors) {{ $errors->has($name) ? 'has-error' : '' }} @endisset() 
    {{ $class ?? '' }}" 
    @if(isset($checked) && $checked) checked @endif
    >
    <input class="form-check-input" type="{{ $type }}" name="{{ $name }}" id="{{ $id }}" value="{{ $value }}" @if(isset($checked) && $checked) checked @endif>
    <label class="form-check-label" for="{{ $id }}">
        {{ $text }}
    </label>
</div>