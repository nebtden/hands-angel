<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('/example', 'ExampleController');
    $router->resource('/articles', 'ArticleController');
    $router->resource('/tasks', 'TaskController');
    $router->resource('/users', 'UserController');
    $router->resource('/user-messages', 'UserMessageController');

});
