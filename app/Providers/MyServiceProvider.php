<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //echo "boot";
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //echo "register";
        $this->app->bind("App\Http\Controllers\Ipower","App\Http\Controllers\Xpower");
        $this->app->bind("App\Http\Controllers\SuperMan","App\Http\Controllers\SuperMan");
    }
}
