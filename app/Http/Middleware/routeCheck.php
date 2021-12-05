<?php

namespace App\Http\Middleware;

use Closure;

class routeCheck
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
        if(isset($request->auth) && ($request->auth == 0)){
            return redirect('error');
        }
        return $next($request);
    }
}
