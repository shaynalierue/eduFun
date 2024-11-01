<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

//import buat pagination
use Illuminate\Pagination\Paginator;

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
        //inisialkan for bootstrap 5
        Paginator::useBootstrap();
    }
}
