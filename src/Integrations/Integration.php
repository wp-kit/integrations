<?php
    
    namespace WPKit\Integrations;
    
    use Illuminate\Support\ServiceProvider;
    use Illuminate\Config\Repository;

	class IntegrationServiceProvider extends ServiceProvider {
	    
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
	    
	    public function startIntegration() {}
    	
    }