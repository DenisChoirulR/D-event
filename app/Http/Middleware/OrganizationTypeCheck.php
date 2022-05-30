<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class OrganizationTypeCheck
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
        if(isset(Auth::user()->type)) {
            $access = Auth::user()->type;

            if ($access == "admin") {
                return redirect('/admin-home');
            }
            elseif ($access == "guest") {
                return redirect('/');
            }

            return $next($request);
        } else {
            return redirect('/login');
        }
    }
}
