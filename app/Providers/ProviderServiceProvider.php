<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Provider;

class ProviderServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('provider', function(){
            return new Provider();
        });
    }
}
