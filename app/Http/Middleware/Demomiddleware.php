<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Demomiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //$key = $request->header('API-key');
        $key = $request->key;
        if($key=='os44'){
            return $next($request);
        }
        else{
            return response()->json('unauthorized', 401);
            //return redirect('/hello2');
        }


    }
}
