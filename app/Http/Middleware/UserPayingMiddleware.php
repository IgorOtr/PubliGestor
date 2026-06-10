<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserPayingMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$types): Response
    {
        if ($request->user() && in_array($request->user()->paying, $types)) {
            return $next($request);
        }

        abort(403, 'Acesso não autorizado.');
    }
}
