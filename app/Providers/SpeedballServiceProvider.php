<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BoxleoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        \App\Shipment::observe(\App\Observer\ShipmentObserver::class);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
