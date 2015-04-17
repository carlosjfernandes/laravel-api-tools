<?php

namespace Joselfonseca\LaravelApiTools;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;
use Joselfonseca\LaravelApiTools\Responders\JsonResponder;

class LaravelApiToolsServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot() {
        
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        /** Lets create an alias * */
        AliasLoader::getInstance()->alias('ApiToolsResponder', 'Joselfonseca\LaravelApiTools\ApiToolsResponder');
        /** Bind the default clases * */
        $this->app->bind('JsonResponder', function() {
            return new JsonResponder;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides() {
        return array();
    }

}
