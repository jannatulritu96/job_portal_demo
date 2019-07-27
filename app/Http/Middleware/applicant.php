<?php

namespace App\Http\Middleware;

use Closure;

class applicant
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
        if(\auth()->applicant())
        {
            return $next($request);
        }
        return redirect('login.store');
    }
}
