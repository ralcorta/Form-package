<?php

namespace Dvs360\Form\Traits;

use Illuminate\Support\View;

trait Component
{

    protected static $base = 'form::';

    public function getView(string $component, array $parameters = [], $errors = null)
    {
        return view(static::$base . $component, $parameters)->with('errors', $errors);
    }

    public function create(string $viewRoute, array $parameters = [], $errors = null)
    {
        return view($viewRoute, $parameters)->with('errors', $errors);
    }

}