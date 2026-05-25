<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class EnforceCanonicalDomain
{
    public function handle(Request $request, Closure $next)
    {
       // 1. Bypass SEO redirects if we are in local development
        if (App::environment('local', 'testing')) {
            return $next($request);
        }

        // 2. Enforce rules ONLY in production
        $canonicalDomain = 'dreamclone.in';

        if ($request->getHost() !== $canonicalDomain || !$request->secure()) {
            return redirect()->secure($request->path(), 301);
        }

        return $next($request);
    }
}
