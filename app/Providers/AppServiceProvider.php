<?php

namespace App\Providers;

use App\Models\Prestation;
use App\Observers\PrestationObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Prestation::observe(PrestationObserver::class);
    }
}
