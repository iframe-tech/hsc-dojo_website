<?php

namespace App\Http\Middleware;

use Closure;

class ActiveUser
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

        if ($request->user()->status!="active") {           
            auth()->logout();
            return redirect()->route('login')
                ->withError('Your account is blocked. You need to register for another month. Waiting to get you back. If you think this message is an error, contact us over e-mail or phone. ');
        }

        return $next($request);
    }
}
