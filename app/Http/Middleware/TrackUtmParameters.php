<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackUtmParameters
{
    protected array $utmParams = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'utm_term'];

    public function handle(Request $request, Closure $next): Response
    {
        foreach ($this->utmParams as $param) {
            if ($request->has($param)) {
                session([$param => $request->query($param)]);
            }
        }

        return $next($request);
    }
}
