<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Vote
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $age = $request->route('age');

        if ($age > 18) {
            return $next($request); 
        } else {
            return redirect('/'); 
        }
    }
}
