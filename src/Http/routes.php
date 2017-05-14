<?php

Route::get('demo/test', function () {
    return 'test';
});

Route::get('demo/hello', function () {
    return Demo::hello();
});

Route::get('name/{name?}', '\Mikewazovzky\Demo\Http\DemoController@name');

Route::get('demo', '\Mikewazovzky\Demo\Http\DemoController@index');