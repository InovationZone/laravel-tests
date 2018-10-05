<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class LogServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('LogWriterInterface','LogDatabaseWriter');
        $this->app->singleton('LogService', function($app){
            return new \Log($app->make('LogWriterInterface'));
        });

    }
}
