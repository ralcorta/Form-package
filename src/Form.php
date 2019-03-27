<?php

namespace Dvs360\Form;

use Dvs360\Form\Traits\Component;

class Form extends Configuration
{
    use Component;
        
    /**
     * Create a form input
     *
     * @param array $parameters
     * @param [type] $errors
     * 
     * @return Illuminate\Support\View
     */
    public function input(array $parameters, $errors = null)
    {
        return $this->getView('input', $parameters, $errors);
    }

    /**
     * Create a form input group
     *
     * @param array $parameters
     * @param [type] $errors
     * 
     * @return Illuminate\Support\View
     */
    public function inputGroup(array $parameters, $errors = null) 
    {
        return $this->getView('input_group', $parameters, $errors);
    }    

    /**
     * Create a form open tag
     *
     * @param array $parameters
     * @param [type] $errors
     * 
     * @return Illuminate\Support\View
     */
    public function open(array $parameters = [], $errors = null) 
    {
        return $this->getView('form_open', $parameters, $errors);
    }   
    
    /**
     * Create a form close tag
     *
     * 
     * @return Illuminate\Support\View
     */
    public function close() 
    {
        return $this->getView('form_close');
    }   

    /**
     * Create a select form
     *
     * @param array $parameters
     * @param [type] $errors
     * 
     * @return Illuminate\Support\View
     */
    public function select(array $parameters, $errors = null) 
    {
        return $this->getView('select', $parameters, $errors);
    } 

    /**
     * Create a form Text Area
     *
     * @param array $parameters
     * @param [type] $errors
     * 
     * @return Illuminate\Support\View
     */
    public function textarea(array $parameters, $errors = null) 
    {
        return $this->getView('textarea', $parameters, $errors);
    } 

    /**
     * Create a form Radop button
     *
     * @param array $parameters
     * @param [type] $errors
     * 
     * @return Illuminate\Support\View
     */
    public function radio(array $parameters, $errors = null) 
    {
        return $this->getView('radio_checkbox', $parameters + [ 'type' => 'radio'], $errors);
    } 

    /**
     * Create a form Checkbox
     *
     * @param array $parameters
     * @param [type] $errors
     * 
     * @return Illuminate\Support\View
     */
    public function checkbox(array $parameters, $errors = null) 
    {
        return $this->getView('radio_checkbox', $parameters  + [ 'type' => 'checkbox'], $errors);
    } 

    /**
     * Create a form button
     *
     * @param array $parameters
     * 
     * @return Illuminate\Support\View
     */
    public function button(array $parameters) 
    {
        return $this->getView('button', $parameters);
    }

    /**
     * Create a form text input
     *
     * @param array $parameters
     * @param [type] $errors
     * 
     * @return Illuminate\Support\View
     */
    public function text(array $parameters, $errors = null)
    {
        return $this->input($parameters + [ 'type' => 'text' ], $errors);
    }

    /**
     * Create a form password input
     *
     * @param array $parameters
     * @param [type] $errors
     * 
     * @return Illuminate\Support\View
     */
    public function password(array $parameters, $errors = null)
    {
        return $this->input($parameters + [ 'type' => 'password' ], $errors);
    }

    /**
     * Create a form hidden input
     *
     * @param array $parameters
     * @param [type] $errors
     * 
     * @return Illuminate\Support\View
     */
    public function hidden(array $parameters, $errors = null)
    {
        return $this->input($parameters + [ 'type' => 'hidden' ], $errors);
    }

    /**
     * Create a form email input
     *
     * @param array $parameters
     * @param [type] $errors
     * 
     * @return Illuminate\Support\View
     */
    public function email(array $parameters, $errors = null)
    {
        return $this->input($parameters + [ 'type' => 'email' ], $errors);
    }
}
