<?php

namespace Yen\Modules\Transaction\Http\Controllers;

use Yen\Http\Controllers\Controller;

class ListController extends Controller
{
    public function show()
    {
        return view('transaction::list');
    }
}
