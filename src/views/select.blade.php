<div class="form-group @isset($errors) {{ $errors->has($name) ? 'has-error' : '' }} @endisset() {{ $class ?? '' }}" >
    @isset($label)
    <label  @isset($id) for="{{ $id }}" @endisset >
        {{ $label }}
        @if(isset($required) && $required)
        <b>*</b>
        @endif
    </label>
    @endisset

    <select name="{{ $name }}" class="form-control"
        @isset($id)
        id="{{ $id }}"
        @endisset
        @if(@isset($disabled) && $disabled)
        disalbed
        @endisset
        @if(@isset($autofocus) && $autofocus)
        autofocus
        @endisset
        @if(@isset($multiple) && $multiple)
        multiple
        @endisset
        @if(@isset($required) && $required)
        required
        @endisset
        @isset($size)
        size="{{ $size }}"
        @endisset
        >

        @if($options)

            <option value=""> {{ $messageIfHas ?? '- Seleccione una opción -' }} </option>

            @if($options instanceof \Illuminate\Support\Collection || $options instanceof \Illuminate\Database\Eloquent\Collection)
                @foreach ($options as $option)
                    <option value="{{ $option->$value }}" @if((isset($selected) && $option->$value == $selected) || (isset($name) &&  $option->$value == old($name))) selected @endif>{{ $option->$text }}</option>
                @endforeach
            @endif

            @if(is_array($options))
                @foreach ($options as $key => $value)
                    <option value="{{ $key }}" @if((isset($selected) && $key == $selected) || (isset($name) && $key == old($name))) selected @endif>{{ $value }}</option>
                @endforeach
            @endif

        @else

            <option value=""> {{ $messageIfNotHas ?? '- Sin opciónes -' }} </option>

        @endif

    </select>

    @include('form::_errors')

</div>
