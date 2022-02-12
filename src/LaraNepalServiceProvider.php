<?php

namespace Pratiksh\LaraNepal;

use Illuminate\Support\ServiceProvider;

class LaraNepalServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/LaraNepal.php', 'lara-nepal');

        $this->loadResources();

        if ($this->app->runningInConsole()) {
            $this->publishResources();
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands([
            Console\Commands\ImportNepalCommand::class,
        ]);
        // Register facade
        $this->app->singleton('lara-nepal', function () {
            return new LaraNepal;
        });
    }

    protected function loadResources()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }

    protected function publishResources()
    {
        $this->publishConfig();
        $this->publishSeeds();
    }

    /**
     * Publish Config.
     *
     * @return void
     */
    protected function publishConfig()
    {
        $this->publishes([
            __DIR__.'/../config/LaraNepal.php' => config_path('LaraNepal.php'),
        ], 'config');
    }

    /**
     *Publish Seed.
     *
     *@return void
     */
    protected function publishSeeds()
    {
        $this->publishes([
            __DIR__.'/../database/seeders' =>  database_path('seeders'),
        ], 'laranepal-seed');
    }
}
