<?php

namespace Yen\Providers;

use Illuminate\Support\ServiceProvider;
use Yen\Modules;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->register(Modules\Auth\AuthServiceProvider::class);
        $this->app->register(Modules\App\AppServiceProvider::class);
        $this->app->register(Modules\Budget\BudgetServiceProvider::class);
        $this->app->register(Modules\Transaction\TransactionServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
