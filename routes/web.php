<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;

$router->group(['prefix' => 'api'], function () use ($router) {
    // Route for user registration
    $router->post('register', [AuthController::class, 'register']);

    // Route for user login
    $router->post('login', [AuthController::class, 'login']);

    // Other API routes can be defined here
});