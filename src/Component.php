<?php

namespace Dvs360\Form;

use Illuminate\View\View as view;

class Component
{
    protected static $base = 'form::';

    protected static function view(string $component, array $parameters = [], $errors = null) : view 
    {
        return view(static::$base . $component, $parameters)->with('errors', $errors);
    }
}
