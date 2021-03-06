<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    private const GUARD_USER = 'users';
    private const GUARD_OWNER = 'owners';
    private const GUARD_ADMIN = 'admin';
    
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        if (Auth::guard(Self::GUARD_USER)->check() && $request->route('user.*')) {
          return redirect(RouteServiceProvider::HOME);  
        }

        if (Auth::guard(Self::GUARD_OWNER)->check() && $request->route('owner.*')) {
            return redirect(RouteServiceProvider::OWNER_HOME);  
        }
          
        if (Auth::guard(Self::GUARD_ADMIN)->check() && $request->route('admin.*')) {
            return redirect(RouteServiceProvider::ADMIN_HOME);  
        }
       

        return $next($request);
    }
}
