<?php

namespace Skynettechnologies\Allinoneaccessibility\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Skynettechnologies\Allinoneaccessibility\Allinoneaccessibilitys;
use Theme;
use Illuminate\Support\Facades\Request;
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

        // Call publish resources function
        $this->publishResources();
//        $host = url()->current();
        if (Request::is('admin/*') || Request::is('admin')) {
        }
        else {
//               $current_domain_name = isset($_SERVER['HTTP_HOST'])?$_SERVER['HTTP_HOST']:'';
//               $curl = curl_init();
//               curl_setopt_array($curl, array(
//                CURLOPT_URL => 'https://ada.skynettechnologies.us/check-website',
//                CURLOPT_RETURNTRANSFER => true,
//                CURLOPT_ENCODING => '',
//                CURLOPT_MAXREDIRS => 10,
//                CURLOPT_TIMEOUT => 0,
//                CURLOPT_FOLLOWLOCATION => true,
//                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//                CURLOPT_CUSTOMREQUEST => 'POST',
//                CURLOPT_POSTFIELDS => array('domain' =>  $current_domain_name) //'xoopsdemo.com', 'skynettechnologies.com'
//                 ));
//                $response = curl_exec($curl);
//                curl_close($curl);
//                $settingURLObject = json_decode($response);
//                if($settingURLObject->status == '0' && $settingURLObject->status == '4' || Request::is('admin')){
//                }else{
            $theme = Theme::uses('default')->layout('app');
            $theme->asset()->writeContent('custom-inline-script', '
                    <script id="aioa-adawidget" src="https://www.skynettechnologies.com/accessibility/js/all-in-one-accessibility-js-widget-minify.js?aioa_reg_req=true&colorcode=&token=&position=bottom_right">
                    </script>');
//                }
        }
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
        $this->publishes([__DIR__ . '/../../resources/js' => base_path('resources/js/')], 'view');

        // Publish language files
        $this->publishes([__DIR__ . '/../../resources/lang' => base_path('resources/lang/vendor/allinoneaccessibility')], 'lang');

        // Publish public files and assets.
        $this->publishes([__DIR__ . '/../../public/' => public_path('/')], 'public');
    }
}
