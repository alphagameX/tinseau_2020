<?php

namespace App\Providers;

use App\FormField\Builder;
use App\Models\Prestation;
use App\Observers\PrestationObserver;

use TCG\Voyager\Facades\Voyager;
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
        Voyager::addFormField(Builder::class);
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
