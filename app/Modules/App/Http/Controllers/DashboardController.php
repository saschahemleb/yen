<?php

namespace Yen\Modules\App\Http\Controllers;

use Yen\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function show()
    {
        return view('app::dashboard');
    }
}
