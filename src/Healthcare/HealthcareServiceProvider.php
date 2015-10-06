<?php namespace Healthcare;

use Illuminate\Support\ServiceProvider;

class HealthcareServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

    /**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->app['healthcare'] = $this->app->share(function($app)
        {
            $config = \Config::get('services.healthcare');
            // if (!array($config)) {
            //     throw new \Exception('Twilio: Invalid configuration.');
            // }
            return new Healthcare($config);
        });

         $this->app['healthcare.test'] = $this->app->share(function($app) {
             return new Commands\TestCommand();
        });

        $this->app['healthcare.zipcode-lookup'] = $this->app->share(function($app) {
             return new Commands\ZipcodeLookupCommand();
        });

        $this->app['healthcare.get-quotes'] = $this->app->share(function($app) {
             return new Commands\GetQuotesCommand();
        });

        $this->commands(
            'healthcare.test',
            'healthcare.zipcode-lookup',
            'healthcare.get-quotes'
        );

	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('healthcare');
	}

}