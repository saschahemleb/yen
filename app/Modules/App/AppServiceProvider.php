<?php

namespace Yen\Modules\App;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/Database/Migrations');
        $this->loadViewsFrom(__DIR__ . '/Views', 'app');
        $this->mergeConfigFrom(__DIR__ . '/config.php', 'app');
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
    }
}
