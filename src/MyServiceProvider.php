<?php

namespace danial\Test;

use Illuminate\Support\ServiceProvider;

class MyServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/migrations');
        $this->publishes([__DIR__ . '/config' => config_path('test.php')]);
    }

    public function register()
    {

    }
}
