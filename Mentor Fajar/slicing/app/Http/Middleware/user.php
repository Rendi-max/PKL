<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class user
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $level = auth()->user()->level?? null;
        if ($level == 1) {
            return $next($request);
        }
        if ($level != 1) {
            return redirect(404);
        }
        return $next($request);
    }
}
