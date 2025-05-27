<?php

namespace App\Providers;

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
        if (!file_exists(storage_path('app/livewire-tmp'))) {
            mkdir(storage_path('app/livewire-tmp'), 0775, true);
        }

        if (!file_exists(storage_path('app/livewire-tmp/livewire-tmp'))) {
            mkdir(storage_path('app/livewire-tmp/livewire-tmp'), 0775, true);
        }

        if ($this->app->environment('local')) {
            error_reporting(E_ALL & ~E_DEPRECATED);
        }
    }
}
