<?php

namespace Yen\Modules\Transaction\Events;

use Yen\Events\Event;
use Yen\Modules\Transaction\Models\TransactionImport;

class TransactionFileUploaded extends Event
{
    public function __construct(public readonly TransactionImport $transactionImport) {}
}
