<?php

namespace Yen\Modules\Budget;

use Illuminate\Support\ServiceProvider;

class BudgetServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/Database/Migrations');
        $this->loadViewsFrom(__DIR__ . '/Views', 'budget');
        $this->mergeConfigFrom(__DIR__ . '/config.php', 'budget');
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
    }
}
