<input 
type="{{ $type ?? 'text' }}" 
id="{{ $id ?? '' }}"
name="{{ $name }}"
class="form-control {{ $class ?? '' }}"
value="{{ $value ?? ''}}"
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
{{ $extra ?? ''}}>