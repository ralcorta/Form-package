@isset($errors)
    @if($errors->has($name))
        @foreach($errors->get($name) as $error)
            <small class="d-block text-danger">{{ $error }}</small>
        @endforeach
    @endif
@endisset