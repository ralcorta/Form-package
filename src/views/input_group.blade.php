<div class="from-group @isset($errors) {{ $errors->has($name) ? 'has-error' : '' }} @endisset() {{ $class ?? '' }}" >
    @isset($label)
    <label for="{{ $id ?? '' }}">{{ $label }}</label>
    @endisset()
   
    @include('form::input')

    @isset($errors) 
    <small class="text-danger">{{ $errors->get($name) }}</small>
    @endisset()
</div>