<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AllowEmbed
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // Remove X-Frame-Options if present
        $response->headers->remove('X-Frame-Options');

        // Allow framing from your Sitejet domain (pas aan!)
        $sitejetOrigin = 'https://jouw-sitejet-domein.nl';
        $response->headers->set(
            'Content-Security-Policy',
            "frame-ancestors 'self' {$sitejetOrigin};"
        );

        return $response;
    }
}
