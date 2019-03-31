<?php

namespace Dvs360\Form;

use Illuminate\Support\ServiceProvider;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'form');
        
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/vendor/dvs360/form'),
        ]);
    }
    
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
