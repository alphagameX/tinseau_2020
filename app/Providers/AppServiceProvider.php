<?php

namespace App\Providers;

use App\FormField\Builder;
use App\FormField\ExtraField;
use App\FormField\PriceField;
use App\Models\Circuit;
use App\Models\Prestation;
use App\Models\Price;
use App\Observers\CircuitObserver;
use App\Observers\PrestationObserver;

use App\Observers\PriceObserver;
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
        Voyager::addFormField(ExtraField::class);
        Voyager::addFormField(PriceField::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Prestation::observe(PrestationObserver::class);
        Circuit::observe(CircuitObserver::class);
        Price::observe(PriceObserver::class);
    }
}
