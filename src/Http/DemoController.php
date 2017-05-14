<?php
namespace Mikewazovzky\Demo\Http;

use Illuminate\Routing\Controller as BaseController;

class DemoController extends BaseController
{
    public function index()
    {
        $items = \Mikewazovzky\Demo\Models\Item::all();
        // return $items;
        return view('mikewazovzky-demo::index', compact('items'));
    }

    public function name($name = null)
    {
        $name = $name ?: config('mikewazovzky-demo.name');
        
        return view('mikewazovzky-demo::name', compact('name'));
    }    
}