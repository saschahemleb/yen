<?php

namespace Yen\Modules\Transaction\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Yen\Models\Model;

class TransactionImport extends Model
{
    use HasUuids;

    protected $hidden = ['file'];
}
