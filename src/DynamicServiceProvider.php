<?php

namespace Mostafax\Dynamic;

use Illuminate\Support\ServiceProvider;

class DynamicServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/dynamic.php', 'dynamic'
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/dynamic.php' => config_path('dynamic.php'),
        ], 'config');
    }
}
