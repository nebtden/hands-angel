<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Seller\Seller;
use App\Admin\Extensions\FreightExporter;;
use Encore\Admin\Admin;
use Encore\Admin\Grid\Exporter;
use Illuminate\Support\Facades\DB;
use Encore\Admin\Form;
use App\Admin\Extensions\CustomExporter;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind('seller', function() {
            return new Seller();
        });
        Form::registerBuiltinFields();
//         Admin::css('/css/nilo.css');
//        $this->loadAdminAuthConfig();
//
//        $this->registerRouteMiddleware();
    }

    protected $routeMiddleware = [
        'admin.auth'       => Middleware\Authenticate::class,
        'admin.pjax'       => Middleware\Pjax::class,
        'admin.log'        => Middleware\LogOperation::class,
        'admin.permission' => Middleware\Permission::class,
        'admin.bootstrap'  => Middleware\Bootstrap::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'admin' => [
            'admin.auth',
            'admin.pjax',
            'admin.log',
            'admin.bootstrap',
            'admin.permission',
        ],
    ];

    /**
     * Setup auth configuration.
     *
     * @return void
     */
    protected function loadAdminAuthConfig()
    {
        config(array_dot(config('admin.auth', []), 'auth.'));
    }

    /**
     * Register the route middleware.
     *
     * @return void
     */
    protected function registerRouteMiddleware()
    {
        // register route middleware.
        foreach ($this->routeMiddleware as $key => $middleware) {
            app('router')->aliasMiddleware($key, $middleware);
        }

        // register middleware group.
        foreach ($this->middlewareGroups as $key => $middleware) {
            app('router')->middlewareGroup($key, $middleware);
        }
    }
}
