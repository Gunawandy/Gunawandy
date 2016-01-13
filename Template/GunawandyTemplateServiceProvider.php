<?php

namespace Gunawandy\Template;

use Illuminate\Support\ServiceProvider;

class GunawandyTemplateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'GunawandyTemplate');
        $this->publishes([__DIR__.'/public'=>public_path("gunawandy-template")], 'public');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }
}
