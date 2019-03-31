<?php

namespace Dvs360\Form;

use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Dvs360\Form\Traits\Component;

class Form
{
    use Component;
    
    protected $refused = ['PUT', 'PATCH', 'DELETE'];

    protected $acepted = ['GET', 'POST'];

    protected $standarMethod = 'POST';

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
        return $this->getComponent('input', $parameters, $errors);
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
        return $this->getComponent('input_group', $parameters, $errors);
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
        $parameters['method'] = $this->refusedMethod($parameters['method'] ?? $this->standarMethod);

        return $this->getComponent('form_open', $parameters, $errors);
    }   
    
    /**
     * Create a form close tag
     *
     * 
     * @return Illuminate\Support\View
     */
    public function close() 
    {
        return $this->getComponent('form_close');
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
        return $this->getComponent('select', $parameters, $errors);
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
        return $this->getComponent('textarea', $parameters, $errors);
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
        return $this->getComponent('radio_checkbox', $parameters + [ 'type' => 'radio'], $errors);
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
        return $this->getComponent('radio_checkbox', $parameters  + [ 'type' => 'checkbox'], $errors);
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
        return $this->getComponent('button', $parameters);
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

    /**
     * Return fixed method if is deferred
     *
     * @param string $method
     * @return array
     */
    private function refusedMethod($method) : array
    {
        $parameters = array();

        if( ! $this->isValidMethod($method))
            return [ 'type' => 'GET' ];

        $isRefused = $this->isRefused($method);

        $method = $this->fixReject($method);

        $parameters = [
            'type' => $isRefused ? $this->standarMethod : $method,
        ];

        if($isRefused)
            $parameters['facade'] = $method;
        
        return $parameters;
    }

    /**
     * Return true or falseif is in refused array
     *
     * @param [type] $needle
     * @param [type] $refused
     * @return void
     */
    private function isRefused(string $method) : bool
    {
        return in_array($this->fixReject($method), $this->refused);
    }

    /**
     * Fix rejected method to standar Uppercase string
     *
     * @param string $reject
     * @return string
     */
    private function fixReject($reject) : string
    {
        return strtoupper($reject);
    }

    /**
     * Return true or false if the methods pass is valid or not.
     *
     * @param string $method
     * @return boolean
     */
    private function isValidMethod(string $method) : bool
    {
        $methods = array_merge($this->refused, $this->acepted);
        
        return in_array($this->fixReject($method), $methods);
    }
}
