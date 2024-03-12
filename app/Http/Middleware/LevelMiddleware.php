<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LevelMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$levels)
    {
        // if (!in_array($request->user()->level, $levels)) {
        //     abort(403); // Or redirect to a suitable view
        // }

        // return $next($request);

        if (!$request->user() || !in_array($request->user()->level, $levels)) {
            abort(403); // Or redirect to a suitable view
        }
    
        return $next($request);
    }
}
