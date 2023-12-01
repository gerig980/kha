<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Session;

class SetDefaultLocale
{
    public function handle($request, Closure $next)
    {
        $app = app();
        $app->setLocale('sq');
        return $next($request);
    }
}
