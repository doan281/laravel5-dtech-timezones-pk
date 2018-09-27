<?php

namespace DtechTimezones\Timezones;

use Illuminate\Support\ServiceProvider;

class TimezonesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $package_name = 'timezones';

        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/resources/views', $package_name);

        $this->publishes([
            __DIR__ . '/resources/views' => resource_path('views/vendor/'.$package_name),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
