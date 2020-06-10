<?php

namespace App\Http\Middleware;

use Closure;

class DatabaseMaintainer
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
        if ($request->user()->role =="user" ) {           
            auth()->logout();
            return redirect()->route('login')
                ->withError(' You are not authorized to see this page. :)');
        }

        return $next($request);
    }
}
