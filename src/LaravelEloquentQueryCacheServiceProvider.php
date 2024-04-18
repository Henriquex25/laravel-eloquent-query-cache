<?php

namespace Henriquex25\LaravelEloquentQueryCache;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class LaravelEloquentQueryCacheServiceProvider extends IlluminateServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/eloquent-query-cache.php' => config_path('eloquent-query-cache.php'),
        ]);
    }
}