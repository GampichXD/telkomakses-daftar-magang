<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Magang;
use App\Observers\MagangObserver;
use App\Models\Registrasi;
use App\Observers\RegistrasiObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Magang::observe(MagangObserver::class);
        Registrasi::observe(RegistrasiObserver::class);
    }
}
