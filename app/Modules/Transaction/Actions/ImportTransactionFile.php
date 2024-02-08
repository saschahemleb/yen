<?php

namespace Yen\Modules\Transaction\Actions;

use Yen\Models\User;
use Yen\Modules\Transaction\Events\TransactionFileUploaded;
use Yen\Modules\Transaction\Models\TransactionImport;

class ImportTransactionFile
{
    public function import(User $user, \SplFileInfo $file): TransactionImport
    {
        $rp = $file->getRealPath();
        if ($rp === false) {
            throw new \RuntimeException(sprintf('Could not find input file %s', $file->getPathname()));
        }

        return tap(TransactionImport::query()->create([
            'user_id' => $user->id,
            'file' => file_get_contents($rp),
        ]), function ($ti) {
            TransactionFileUploaded::dispatch($ti);
        });
    }
}
