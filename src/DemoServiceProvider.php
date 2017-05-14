<?php
namespace Mikewazovzky\Demo;

use Illuminate\Support\ServiceProvider;

class DemoServiceProvider extends ServiceProvider
{
    
	public function boot()
	{
		$this->loadRoutesFrom(__DIR__ . '/Http/routes.php');
        
        $this->loadViewsFrom(__DIR__ . '/../views', 'mikewazovzky-demo');

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        
        $this->publishes([
            __DIR__ . '/../config/main.php' => config_path('mikewazovzky-demo.php'),
        ], 'config');
        
        $this->publishes([
            __DIR__ . '/../views' => base_path('resources/views/vendor/mikewazovzky-demo')
        ], 'view');  

        $this->publishes([
            __DIR__ . '/../database/migrations' => $this->app->databasePath() . '/migrations'
        ], 'migrations');      
	}
	
	public function register()
    {		
		$this->mergeConfigFrom(
            __DIR__.'/../config/main.php', 'mikewazovzky-demo'
        );        
        
        $this->app->bind('mikewazovzky-demo', function() {
            return new Demo;
        });
        
        
    }	
}