<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->resource('demo/users', UserController::class);
    $router->get('/room', 'RoomController@index');
    $router->get('/chartmng', 'HomeController@chart')->name('admin.home');
    $router->resource('/chatmng', MessageController::class);   
    $router->resource('/user', UserController::class);
    $router->resource('/password', PasswordController::class);
    $router->resource('/online', OnlineController::class);
});
