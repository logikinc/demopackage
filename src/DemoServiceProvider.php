<?php
namespace Mikewazovzky\Demo;

use Illuminate\Support\ServiceProvider;

class DemoServiceProvider extends ServiceProvider
{
    
	public function boot()
	{
		$this->loadRoutesFrom(__DIR__ . '/Http/routes.php');
        
        $this->loadViewsFrom(__DIR__ . '/views', 'mikewazovzky-demo');
	}
	
	public function register()
    {		
		$this->app->bind('mikewazovzky-demo', function() {
            return new Demo;
        });
    }	
}