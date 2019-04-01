<?php

namespace Dvs360\Form\Traits;

use Illuminate\Support\View;
use Illuminate\Support\HtmlString;

trait Component
{

    protected static $base = 'form::';

    private $view;

    public function getComponent(string $component, array $parameters = [], $errors = null)
    {
        $this->loadView(static::$base . $component, $parameters, $errors);

        return new HtmlString($this->view);
    }

    public function create(string $viewRoute, array $parameters = [], $errors = null)
    {
        $this->loadView($viewRoute, $parameters, $errors);

        return new HtmlString($this->view);
    }

    private function loadView(string $route, array $parameters = [], $errors = null) 
    {
        $this->view = view($route, $parameters)->with('errors', $errors);
    }

}