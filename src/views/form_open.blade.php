<form
    action="{{ $action ?? '' }}"
    method="@isset($method){{ $method['type'] }}@endisset"
    @isset($class)
    class="{{ $class }}"
    @endisset
    @isset($style)
    style="{{ $style }}"
    @endisset
    @isset($accept_charset)
    accept-charset="{{ $accept_charset }}"
    @endisset()
    @isset($enctype)
    enctype="{{ $enctype }}"
    @endisset
    @isset($name)
    name="{{ $name }}"
    @endisset
    @isset($id)
    id="{{ $id }}"
    @endisset
    @isset($target)
    target="{{ $target }}"
    @endisset
    @if( isset($novalidate) && $novalidate)
    novalidate
    @endif
    @if( isset($autocomplete) && $autocomplete)
    autocomplete="{{ $autocomplete }}"
    @endif
    >
@if(isset($method) && isset($method['facade'])) 
    <input type="hidden" name="_method" value="{{ $method['facade'] }}">
@endif

@if(isset($method) && $method['type'] != 'GET') 
@csrf
@endif