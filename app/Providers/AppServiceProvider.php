<?php

namespace App\Providers;

use App\Models\CovidCase;
use App\Observers\CovidCaseObserver;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        if ($this->app->environment('local')) {
            $this->app->register(\Laravel\Telescope\TelescopeServiceProvider::class);
            $this->app->register(TelescopeServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
//        JsonResponse::withoutWrapping();\
        CovidCase::observe(CovidCaseObserver::class);
    }
}
