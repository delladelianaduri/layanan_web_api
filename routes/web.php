<?php

use App\Http\Controllers\AuthController;
use Laravel\Lumen\Routing\Router;

/** @var Router $router */
$router->group(['prefix' => 'api'], function () use ($router) {
    // Route for user registration
    $router->post('register', ['uses' => 'AuthController@register']);

    // Route for user login
    $router->post('login', ['uses' => 'AuthController@login']);

    // Route for fetching authenticated user data
    $router->get('me', ['middleware' => 'auth', 'uses' => 'AuthController@me']);
});