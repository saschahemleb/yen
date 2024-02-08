<?php

namespace Yen\Modules\Transaction\Http\Middlewares;

use Closure;
use Illuminate\Http\Request;
use Illuminate\View\Factory as ViewFactory;
use Yen\Http\Middlewares\Middleware;
use Yen\Modules\Transaction\Models\TransactionImport;

class ShareImportStatus extends Middleware
{
    public function __construct(private readonly ViewFactory $view) {}

    public function handle(Request $request, Closure $next): mixed
    {
        $userId = $request->user()?->id;
        $this->view->share(
            'numberOfImportsRunning',
            $userId ? TransactionImport::query()->where('user_id', $userId)->count() : 0,
        );

        return $next($request);
    }

}
