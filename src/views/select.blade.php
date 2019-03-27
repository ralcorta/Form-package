<div class="from-group @isset($errors) {{ $errors->has($name) ? 'has-error' : '' }} @endisset() {{ $class ?? '' }}" >
    @isset($label)
    <label  @isset($id) for="{{ $id }}" @endisset >{{ $label }}</label>
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

            @if($options instanceof \Illuminate\Support\Collection || $options instanceof \Illuminate\Database\Eloquent\Collection)
                @foreach ($options as $option)
                    <option value="{{ $option->$value }}">{{ $option->$text }}</option>
                @endforeach
            @endif

            @if(is_array($options))
                @foreach ($options as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                @endforeach
            @endif

        @endisset
        
    </select>
    @isset($errors) 
    <small class="text-danger">{{ $errors->get($name) }}</small>
    @endisset()
</div>
