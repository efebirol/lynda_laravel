<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class DummyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        echo "--DummyServiceProvider.php - bin die boot()<br>";
    }
    
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        echo " --DummyServiceProvider.php - bin die register()<br/>";
    }
}
