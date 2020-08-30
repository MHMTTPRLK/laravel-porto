<?php

namespace App\Providers;

use App\Models\Config;
use App\Models\Information;
use App\Models\Social;
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
        view()->share('config',Config::find(1));
        view()->share('info',Information::find(1));
        view()->share('sosyal',Social::find(1));
    }
}
