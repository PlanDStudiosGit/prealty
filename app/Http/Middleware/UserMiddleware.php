<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class UserMiddleware
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
        if(Auth::check()){
        if(auth::user()->role=='0'){
            return $next($request);
        }
        else{
            return redirect('/admin/dashboard')->with('message','Access Denied');
        }


        }
         else
        {
            return redirect('admin/login')->with('message','Login Success');
        }
        return $next($request);
    }
}