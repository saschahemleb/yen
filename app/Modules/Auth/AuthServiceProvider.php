<?php

namespace Yen\Modules\Auth;

use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/Database/Migrations');
        $this->loadViewsFrom(__DIR__ . '/Views', 'auth');
        $this->mergeConfigFrom(__DIR__ . '/config.php', 'auth');
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
    }
}
