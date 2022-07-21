<?php

namespace App\Http\Middleware;
use App\view;
use Closure;
use Illuminate\Http\Request;

class WebGuard
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
        if($request->age<18)
        {
            Echo "message from WEbguard middleware";
            //die;
        } 
        return $next($request);
    }
}
