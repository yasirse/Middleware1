<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        /* if(session()->has('my_name'))
        {
            Echo "Message from Age Checker=".$request->age;
            return $next($request);
        }
        else
        {
            Echo "Age is below";
            return redirect()->route('logout');
        }
         */
        Echo "Message from Age Checker middleware";
        //return $next($request);
        return redirect('/no-access');
    }
}
