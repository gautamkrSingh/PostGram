<?php

namespace App\Http\Middleware;

use Closure;

class ageCheck
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
        if(isset($request->age) && ($request->age <= "10")){
            return redirect('error');
        }
        return $next($request);
    }
}
