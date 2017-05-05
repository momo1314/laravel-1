<?php

namespace App\Http\Middleware;

use Closure;

class TestMiddleware
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
        $response = $next($request);
        if(intval($response->stuid)<=2016200000&&intval($response->stuid)>=){
            return view('so');
        }
        else{
            return $response;
        }
    }
}
