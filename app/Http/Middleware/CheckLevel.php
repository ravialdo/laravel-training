<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class CheckLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$level)
    {
        if ($level !== \Auth::user()->level) :

            Session::put('url','home');
            return redirect('/home');

        else :

            Session::put('url','students');
            return $next($request);

        endif;
    }
}
