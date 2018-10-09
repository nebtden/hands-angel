<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Seller\Seller;

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
    }
}
