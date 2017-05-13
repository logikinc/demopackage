<?php
namespace Mikewazovzky\Demo\Http;

use Illuminate\Routing\Controller as BaseController;

class DemoController extends BaseController
{
    public function index($name)
    {
        return view('mikewazovzky-demo::index', compact('name'));
    }
}