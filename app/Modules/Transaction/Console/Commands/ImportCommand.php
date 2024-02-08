<?php

namespace Yen\Modules\Transaction\Console\Commands;

use Yen\Console\Commands\Command;
use Yen\Models\User;
use Yen\Modules\Transaction\Actions\ImportTransactionFile;

class ImportCommand extends Command
{
    protected $signature = 'transaction:import {user} {file}';

    protected $description = 'Import a transaction file';

    public function handle(): void
    {
        $user = User::query()->where('email', $this->argument('user'))->firstOrFail();
        $file = $this->argument('file');
        if (!file_exists($file)) {
            throw new \RuntimeException(sprintf('Could not find file %s', $file));
        }

        app(ImportTransactionFile::class)->import($user, new \SplFileInfo($file));
    }
}
