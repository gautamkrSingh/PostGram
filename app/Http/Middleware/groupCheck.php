<?php

namespace App\Http\Middleware;

use Closure;

class groupCheck
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
        if(isset($request->group) && ($request->group != "student")){
            return redirect('error');
        }
        return $next($request);
    }
}
