<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class studentMiddleware
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

        if ($request->input('age') < '18')
        {
            // return redirect('/home');
            return redirect('home')->with('message', 'Your session has expired. Please login in again');
        }else{
            return $next($request);
        }

    }
}
