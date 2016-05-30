<?php

namespace fajardm\laravelopenload;

use Illuminate\Support\ServiceProvider;

class LaravelOpenloadServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('LaravelOpenload', function ($app) {
            return new LaravelOpenload($app);
        });
    }
}
