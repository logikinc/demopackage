<?php
namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class DemopackageTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    function it_does_something()
    {
		echo 'Mikewazovzky\Demopackage Unit Tests';	
		$this->assertTrue(true);
    }
    /** @test */
    function it_can_read_config_data_and_dispay_it_on_name_page()
    {
		$name = config('mikewazovzky-demo.name');	
		$this->get('/name')
			->assertSee($name);
    }    
    /** @test */
    function it_creates_items_in_database()
    {
		$item = factory(\Mikewazovzky\Demopackage\Models\Item::class)->create();	
		$this->assertCount(1, \Mikewazovzky\Demopackage\Models\Item::all());
    }

    /** @test */
    function it_displays_database_items_on_index_page()
    {
		$item = factory(\Mikewazovzky\Demopackage\Models\Item::class)->create();
		$this->get('/demo')
			->assertSee($item->name);			
    }
}