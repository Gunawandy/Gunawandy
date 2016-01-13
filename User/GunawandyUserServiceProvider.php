<?php

namespace Gunawandy\User;

use Illuminate\Support\ServiceProvider;

class GunawandyUserServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'GunawandyUser');
        require __DIR__.'/routes.php';
    }

    public function register()
    {

    }
}
