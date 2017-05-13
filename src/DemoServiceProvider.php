<?php
namespace Mikewazovzky\Demo;

use Illuminate\Support\ServiceProvider;

class DemoServiceProvider extends ServiceProvider
{
    
	public function boot()
	{
		$this->loadRoutesFrom(__DIR__ . '/routes.php');
	}
	
	public function register()
    {
        
		include __DIR__.'/routes.php';
		
		$this->app->bind('mikewazovzky-demo', function() {
            return new Demo;
        });
    }	
}