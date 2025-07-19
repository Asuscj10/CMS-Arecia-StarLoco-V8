<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Logged
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::guest())
        {
            return redirect()->route('account.register');
        }

        return $next($request);
    }
}