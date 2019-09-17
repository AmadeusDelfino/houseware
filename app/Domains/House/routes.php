<?php

Route::group(['namespace' => 'House\Controllers', 'prefix' => 'houses', 'middleware'=>'auth:api'], function ($route) {
    $route->get('/', 'HouseController@all');
    $route->get('/{id}', 'HouseController@find');
    $route->post('/', 'HouseController@create');
    $route->delete('/{id}', 'HouseController@delete');
    $route->put('/{id}', 'HouseController@update');
});
