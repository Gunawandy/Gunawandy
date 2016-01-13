<?php

namespace Gunawandy\Penjualan;

use Illuminate\Support\ServiceProvider;

class GunawandyPenjualanServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'GunawandyPenjualan');
        require __DIR__.'/routes.php';
    }

    public function register()
    {
        
    }
}
