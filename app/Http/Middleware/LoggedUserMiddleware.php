<?php

namespace App\Http\Middleware;

use Closure;

class LoggedUserMiddleware
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
        if(session()->has('user')){
        
            return redirect('/');

        }
        return $next($request);
    }
}
