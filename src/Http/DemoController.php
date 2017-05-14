<?php
namespace Mikewazovzky\Demo\Http;

use Illuminate\Routing\Controller as BaseController;

class DemoController extends BaseController
{
    public function index($name = null)
    {
        $name = $name ?: config('mikewazovzky-demo.name');
        
        return view('mikewazovzky-demo::index', compact('name'));
    }
}