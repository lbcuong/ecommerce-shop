<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    use HasRoles;

    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;
        $user = Auth::user()->role;
        foreach ($guards as $guard) {
            //if (Auth::guard($guard)->check()) {
                //if ($user->hasRole('admin')) {
                    // The user has the admin role 
                    //return redirect(RouteServiceProvider::DASHBOARD);
                //} else {
                    // This is a generic user 
                    return redirect(RouteServiceProvider::HOME);
                //}
            //}
        }

        return $next($request);
    }
}
