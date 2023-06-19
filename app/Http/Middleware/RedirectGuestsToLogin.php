<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectGuestsToLogin
{
    public function handle($request, Closure $next)
{
    $allowedPaths = ['login', 'register'];

    if (!Auth::check() && !in_array($request->path(), $allowedPaths)) {
        return redirect()->guest('login');
    }

    return $next($request);
}
}