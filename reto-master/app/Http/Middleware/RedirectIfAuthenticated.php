<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if ($guard == "alumno" && Auth::guard($guard)->check()) {
            return redirect('index');
        }
        if ($guard == "profesor" && Auth::guard($guard)->check()) {
            return redirect('index');
        }
        if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }

        return $next($request);
    }
}
