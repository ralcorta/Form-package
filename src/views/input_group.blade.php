<div class="form-group @isset($errors){{ $errors->has($name) ? 'has-error' : '' }}@endisset()" >
    @isset($label)
    <label for="{{ $id ?? '' }}">
        {{ $label }}
        @if(isset($required) && $required)
        <b>*</b>
        @endif
    </label>
    @endisset()

    @include('form::input')
</div>
