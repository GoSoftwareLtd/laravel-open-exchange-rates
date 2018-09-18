<?php

namespace Equentor\LaravelOpenExchangeRates;

use Illuminate\Support\ServiceProvider;

class LOERServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config.php' => config_path('loer.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(\Equentor\LaravelOpenExchangeRates\Client::class);
    }
}
