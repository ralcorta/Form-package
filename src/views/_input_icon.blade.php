@if(!isset($icon['flat']))
    <div class="
        @if(isset($icon['side']))
            @if($icon['side'] == 'right')
                input-group-append 
            @else
                input-group-prepend 
            @endif
        @else
            input-group-prepend 
        @endif
    ">
@endif
    <span class="input-{{ isset($icon['flat']) && $icon['flat'] ? 'icon-addon' : 'group-text' }}"> <!-- input-icon-addon -->
        @if(isset($icon['icon']))
            <i class="{{ $icon['icon'] ?? '' }}"></i>
        @else
            {{ $icon['text'] }} 
        @endif
    </span>
@if(!isset($icon['flat']))
    </div>
@endif