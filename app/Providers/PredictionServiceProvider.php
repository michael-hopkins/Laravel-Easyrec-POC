<?php namespace Predict\Providers;

use Config;
use Illuminate\Support\ServiceProvider;
use Predict\Prediction\PredictionIO;

class PredictionServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Boot the application
     *
     */
    public function boot()
    {
    }

    /**
     * Register to service provider
     *
     */
    public function register()
    {
        $this->app['predictionio'] = $this->app->share(function($app)
        {
            return new PredictionIO(Config::get('services.predictionio.key'), Config::get('services.predictionio.api'));
        });
    }
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('predictionio');
    }

}
