<?php

Route::group(['namespace' => 'Auth\Controllers'], function($route) {
    $route->post('login', 'AuthController@login');
    $route->post('signup', 'AuthController@signUp');

    $route->group(['middleware' => 'auth:api'], function ($route) {
        $route->post('logout', 'AuthController@logout');
        $route->get('user', 'UserController@user');
    });
});
