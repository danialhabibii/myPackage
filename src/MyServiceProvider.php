<?php

namespace danial\Test;

use Illuminate\Support\ServiceProvider;

class MyServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/migrations');
    }

    public function register()
    {

    }
}
