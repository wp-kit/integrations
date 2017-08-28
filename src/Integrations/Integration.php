<?php
    
    namespace WPKit\Integrations;
    
    use Illuminate\Support\ServiceProvider;
    use Illuminate\Config\Repository;

	class Integration extends ServiceProvider {
	    
		/**
	     * Register the service provider.
	     *
	     * @return void
	     */
	    public function register() {
		    
		    if( ! $this->app->bound('config.factory') ) {
			    
			    if( ! $this->app->bound('config') ) {
				    
				    $this->app->alias('config', Repository::class);
				    
			    }
			    
			    $this->app->singleton('config.finder', function() {
				    return $this->app['config'];
			    });
			    
		    }
		    
		    $this->startIntegration();
		    
	    }
	    
		/**
	     * Start the integration.
	     *
	     * @return void
	     */
	    public function startIntegration() {}
    	
    }
