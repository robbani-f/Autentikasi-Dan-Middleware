<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle($request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            return abort(403, 'Unauthorized action.');
        }

        $user = Auth::user();

        if (!$user || !$user->hasRole($roles)) {
            return abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}
