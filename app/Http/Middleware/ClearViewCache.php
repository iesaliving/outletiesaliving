<?php

namespace App\Http\Middleware;

use Closure;
use Artisan;

class ClearViewCache
{
   
    public function handle($request, Closure $next)
    {
        if (env('APP_DEBUG') || env('APP_ENV') === 'local') 
            Artisan::call('view:clear');
            Artisan::call('cache:clear');

        return $next($request);
    }
}
