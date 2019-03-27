<?php

namespace Dvs360\Form;

use Illuminate\Support\HtmlString;
use Illuminate\View\View as view;

class Form extends Component
{
    /**
     * 
     *  Package to form homologate
     * 
     */
    
    public static function input(array $parameters, $errors = null) : view 
    {
        return parent::view('input', $parameters, $errors);
    }

    public static function inputGroup(array $parameters, $errors = null) : view 
    {
        return parent::view('input_group', $parameters, $errors);
    }    

    public static function open(array $parameters = [], $errors = null) : view 
    {
        return parent::view('form_open', $parameters, $errors);
    }   
    
    public static function close() : view 
    {
        return parent::view('form_close');
    }   

    public static function select(array $parameters, $errors = null) : view 
    {
        return parent::view('select', $parameters, $errors);
    } 

    public static function textarea(array $parameters, $errors = null) : view 
    {
        return parent::view('textarea', $parameters, $errors);
    } 

    public static function radio(array $parameters, $errors = null) : view 
    {
        return parent::view('radio_checkbox', $parameters + [ 'type' => 'radio'], $errors);
    } 

    public static function checkbox(array $parameters, $errors = null) : view 
    {
        return parent::view('radio_checkbox', $parameters  + [ 'type' => 'checkbox'], $errors);
    } 

    public static function button(array $parameters) : view 
    {
        return parent::view('button', $parameters);
    }

    
}
