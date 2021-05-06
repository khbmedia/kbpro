<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Client;
use App\Social;
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
        Schema::defaultStringLength(191);
        view()->composer(
            'frontend.include.client', 
            function ($view) {
                $view->with('client', Client::all());
            }
        );
        view()->composer(
            'frontend.include.footer', 
            function ($view) {
                $view->with('socials', Social::all());
            }
        );
    }
}
