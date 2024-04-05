<?php

namespace Skynettechnologies\Allinoneaccessibility\Providers;

use Illuminate\Support\ServiceProvider;
use Skynettechnologies\Allinoneaccessibility\Allinoneaccessibilitys;

class AllinoneaccessibilityServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Load view
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'allinoneaccessibility');

        // Load translation
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'allinoneaccessibility');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

        // Call pblish redources function
        $this->publishResources();

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfig();
        $this->registerFacade();

        $this->app->register(\Skynettechnologies\Allinoneaccessibility\Providers\AuthServiceProvider::class);
        $this->app->register(\Skynettechnologies\Allinoneaccessibility\Providers\RouteServiceProvider::class);
    }

    /**
     * Register the vault facade without the user having to add it to the app.php file.
     *
     * @return void
     */
    public function registerFacade() {
        $this->app->bind('skynettechnologies.allinoneaccessibility', function($app)
        {
            return $this->app->make(Allinoneaccessibility::class);
        });
    }

    /**
     * Merges user's and allinoneaccessibility's configs.
     *
     * @return void
     */
    protected function mergeConfig()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/config.php', 'skynettechnologies.allinoneaccessibility'
        );


        $this->mergeConfigFrom(
            __DIR__ . '/../../config/allinoneaccessibility.php', 'skynettechnologies.allinoneaccessibility.allinoneaccessibility'
        );
    }


    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['skynettechnologies.allinoneaccessibility'];
    }

    /**
     * Publish resources.
     *
     * @return void
     */
    private function publishResources()
    {
        // Publish configuration file
        $this->publishes([__DIR__ . '/../../config/' => config_path('skynettechnologies/allinoneaccessibility')], 'config');

        // Publish admin view
        $this->publishes([__DIR__ . '/../../resources/views' => base_path('resources/views/vendor/allinoneaccessibility')], 'view');

        // Publish language files
        $this->publishes([__DIR__ . '/../../resources/lang' => base_path('resources/lang/vendor/allinoneaccessibility')], 'lang');

        // Publish public files and assets.
        $this->publishes([__DIR__ . '/public/' => public_path('/')], 'public');
    }
}
