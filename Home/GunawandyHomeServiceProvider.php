<?php

namespace Gunawandy\Home;

use Illuminate\Support\ServiceProvider;

class GunawandyHomeServiceProvider extends ServiceProvider
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
        require __DIR__.'/routes.php'; 
        $this->loadViewsFrom(__DIR__.'/resources/views', "GunawandyHome");
    }
}
