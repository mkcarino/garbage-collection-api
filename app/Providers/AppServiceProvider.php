<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ResourceRegistrar;
use Illuminate\Routing\Router;
use Illuminate\Routing\ResourceRegistrar as BaseResourceRegistrar;
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
        $registrar = new \App\MyCustom\Routing\ResourceRegistrar($this->app['router']);

        $this->app->bind('Illuminate\Routing\ResourceRegistrar', function () use ($registrar) {
            return $registrar;
        });
    }
}
