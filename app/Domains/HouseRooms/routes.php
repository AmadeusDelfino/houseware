<?php

Route::group([
        'namespace' => 'HouseRooms\Controllers',
        'middleware' => 'auth:api',
        'prefix' => 'house-rooms'
    ]
    , function ($route) {
        $route->get('/', 'HouseRoomController@all');
        $route->get('/{id}', 'HouseRoomController@find');
        $route->post('/', 'HouseRoomController@create');
        $route->delete('/{id}', 'HouseRoomController@delete');
        $route->put('/{id}', 'HouseRoomController@update');
    }
);
