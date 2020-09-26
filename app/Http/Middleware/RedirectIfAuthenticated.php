<?php

namespace App\Http\Middleware;

// use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle($request, Closure $next, $guards = null)
    {
        if ($guards == "admin" && Auth::guard($guards)->check()) {
            return redirect('/admin');
        }
        if ($guards == "penduduk" && Auth::guard($guards)->check()) {
            return redirect('/penduduk');
        }
        if (Auth::guard($guards)->check()) {
            return redirect('/home');
        }

        return $next($request);
    }
}
