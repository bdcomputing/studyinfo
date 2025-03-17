<?php

namespace App\Providers;

use App\Models\Continent;
use App\Models\Destination;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        View::composer("web.partials.nav", function ($view) {
            $view->with("destinations", Destination::whereHas('universities')->get())->with("continents", Continent::all());
        });
    }
}
