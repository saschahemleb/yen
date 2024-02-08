<?php

namespace Yen\Modules\Transaction;

use Illuminate\Support\ServiceProvider;
use Yen\Modules\Transaction\Console\Commands\ImportCommand;

class TransactionServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/Database/Migrations');
        $this->loadViewsFrom(__DIR__ . '/Views', 'transaction');
        $this->mergeConfigFrom(__DIR__ . '/config.php', 'transaction');
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ImportCommand::class
            ]);
        }
    }
}
