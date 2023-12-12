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
<<<<<<< HEAD
//        $key = $request->key;
//        if($key=='os44'){
//            return $next($request);
//        }
//        else{
//            return response()->json('unauthorized', 401);
//            //return redirect('/hello2');
//        }


//        //change header
//        $request->headers->add(
//            [
//                'email1' => 'os1@os.com',
//                'email2' => 'os2@os.com'
//            ]
//        );
//
//        //replace
//        $request->headers->replace(
//            [
//                'email2' => 'os4@os.com'
//            ]
//        );
//
//        //remove
//        $request->headers->remove('email2');

        return $next($request);

=======
        $key = $request->key;
        if($key=='os44'){
            return $next($request);
        }
        else{
            return response()->json('unauthorized', 401);
            //return redirect('/hello2');
        }


>>>>>>> 3e9e34118708a8d469e87dc992c348fdd410691b
    }
}
