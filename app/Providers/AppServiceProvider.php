<?php

namespace App\Providers;

use App\Models\CovidCase;
use App\Models\User;
use App\Observers\CovidCaseObserver;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\ServiceProvider;
use Laravel\Pennant\Feature;
use Laravel\Pennant\Middleware\EnsureFeaturesAreActive;

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
//        JsonResponse::withoutWrapping();
        CovidCase::observe(CovidCaseObserver::class);
        Feature::define('task-management', function (User $user) {
            return (bool) $user->is_premium;
        });

        EnsureFeaturesAreActive::whenInactive(
            function () {
                return new Response(status: 401);
            }
        );
    }
}
