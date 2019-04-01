<div 
    class="form-check custom-control custom-checkbox @isset($errors) {{ $errors->has($name) ? 'has-error' : '' }} @endisset(){{ $class['div'] ?? '' }}" 
    @if(isset($checked) && $checked) checked @endif>
    <input 
        class="form-check-input custom-control-input"
        type="{{ $type }}" 
        name="{{ $name }}" 
        id="{{ $id }}" 
        @isset($value) value="{{ $value }}" @endisset 
        @if(isset($checked) && $checked) checked @endif>
    <label 
    class="form-check-label custom-control-label @isset($class)@if(isset($class['label'])){{ $class['label'] }}@elseif(!isset($class['div'])){{ $class }}@endif @endisset" 
    for="{{ $id }}">{{ $text }}</label>
</div>