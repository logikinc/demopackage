<?php

Route::get('demo/test', function () {
    return 'test';
});

Route::get('demo/hello', function () {
    return Demo::hello();
});

Route::get('demo/{name?}', '\Mikewazovzky\Demo\Http\DemoController@index');
