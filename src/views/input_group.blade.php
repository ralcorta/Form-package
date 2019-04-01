<div class="form-group @isset($errors){{ $errors->has($name) ? 'has-error' : '' }}@endisset()" >
    @isset($label)
    <label for="{{ $id ?? '' }}">{{ $label }}</label>
    @endisset()
   
    @include('form::input')

    @isset($errors)
        @if($errors->has($name))
            @foreach($errors->get($name) as $error)
                <small class="d-block text-danger">{{ $error }}</small>
            @endforeach
        @endif
    @endisset
</div>