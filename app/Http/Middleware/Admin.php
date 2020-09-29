<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function handle($request, Closure $next, $guard = null)
    {
      if (Auth::guard($guard)->check()) {
        if(Auth::user()->id == 2 || Auth::user()->id == 4) {
          return $next($request);
        } else {
          return redirect(RouteServiceProvider::HOME);
        }
      }

      return redirect(RouteServiceProvider::HOME);
    }
}
