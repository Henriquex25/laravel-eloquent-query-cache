<?php

namespace Henriquex25\Provider\ServiceProvider;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class ServiceProvider extends IlluminateServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../../config/eloquent-query-cache.php' => config_path('eloquent-query-cache.php'),
        ]);
    }
}