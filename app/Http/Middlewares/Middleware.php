<?php

namespace Yen\Http\Middlewares;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

abstract class Middleware
{
    public function handle(Request $request, Closure $next): mixed
    {
        return $next($request);
    }
    public function terminate(Request $request, Response $response): void {}
}
