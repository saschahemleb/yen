<?php

namespace Yen\Modules\Budget\Http\Controllers;

use Yen\Http\Controllers\Controller;

class ListController extends Controller
{
    public function show()
    {
        return view('budget::list');
    }
}
