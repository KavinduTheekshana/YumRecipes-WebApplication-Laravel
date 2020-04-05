<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
        if(auth()->user()==null){
            return redirect()->route('logout');
        }else if(auth()->user()->user_type == false && auth()->user()->status == true){
            return $next($request);
        }else{
            return redirect()->route('logout');
        }
        return redirect()->route('logout');
    }
}
