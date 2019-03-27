<?php

namespace Dvs360\Form\Traits;

use Illuminate\Support\View;

trait Component
{

    public function getView(string $component, array $parameters = [], $errors = null)
    {
        return view(static::$base . $component, $parameters)->with('errors', $errors);
    }

}