<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;


use Closure;
use Illuminate\Http\Request;

class controlRoom
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


        if (Auth::check()){

            if( auth()->user()->name != 'Jimi Wears' ){

                return redirect('no-acess');

            }

            return $next($request);
            abort(403);
        }

        // if (  auth()->user() != NULL  &&  ){
        //     return view('no-access');
        // }
        // return $next($request);
    }
}
