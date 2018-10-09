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
        Admin::css('/css/nilo.css');
    }
}
