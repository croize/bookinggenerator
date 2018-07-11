<?php

namespace App\Http\Middleware;

use Closure;

class LevelMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function handle($request, Closure $next, $level)
     {
       if (auth()->check() && !auth()->user()->level($level)) {
         return redirect('error');
       }
         return $next($request);
     }
}
