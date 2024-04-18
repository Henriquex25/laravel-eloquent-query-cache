<?php

namespace Henriquex25\EloquentQueryCache\EloquentQueryCacheServiceProvider;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class EloquentQueryCacheServiceProvider extends IlluminateServiceProvider
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