<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LoginCheck
{
    public function handle(Request $request, Closure $next)
    {
        $uname = $request->route('uname');
        $pass = $request->route('pass');

        // Example validation: check if uname and pass match "admin"
        if ($uname == "admin" && $pass == "admin") {
            return $next($request);
        } else {
            return redirect('/');
        }
    }
}
