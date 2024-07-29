<?php

namespace Eduard\Analitycs;

use Illuminate\Support\ServiceProvider;

class AnalitycsServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Register package's services here
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Load routes, migrations, etc.
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        // Load API routes
        $this->loadRoutesFrom(__DIR__.'/Http/routes/api.php');
    }
}