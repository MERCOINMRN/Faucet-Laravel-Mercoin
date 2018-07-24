<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class jsonRPCClient extends ServiceProvider
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
        //
        require app_path() . '/services/jsonRPCClient.php';
    }
}
