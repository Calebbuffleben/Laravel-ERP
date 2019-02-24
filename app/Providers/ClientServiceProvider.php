<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Client;

class ClientServiceProvider extends ServiceProvider
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
        $this->app->singleton('client', function(){
            return new Client();
        });
    }
}
