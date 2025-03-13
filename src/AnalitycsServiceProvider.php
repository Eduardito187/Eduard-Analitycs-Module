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
        // Aquí puedes registrar bindings o servicios específicos del paquete
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Cargar las migraciones del módulo
        $this->loadMigrations();

        // Publicar configuraciones opcionales
        $this->publishConfigurations();

        // Cargar las rutas del módulo
        $this->loadRoutes();
    }

    /**
     * Cargar las migraciones del módulo.
     *
     * @return void
     */
    protected function loadMigrations()
    {
        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(__DIR__ . '/./database/migrations');
        }
    }

    /**
     * Publicar las configuraciones del módulo.
     *
     * @return void
     */
    protected function publishConfigurations()
    {
        $this->publishes([
            __DIR__ . '/../config/analitycs.php' => config_path('analitycs.php'),
        ], 'analitycs-config');
    }

    /**
     * Cargar las rutas del módulo.
     *
     * @return void
     */
    protected function loadRoutes()
    {
        $apiRoutesPath = __DIR__ . '/Http/routes/api.php';

        if (file_exists($apiRoutesPath)) {
            $this->loadRoutesFrom($apiRoutesPath);
        }
    }
}