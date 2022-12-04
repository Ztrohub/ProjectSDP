<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CheckTokenAndAddToHeaderMiddleware
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
        if (Session::has('login')) {
            $user = Session::get('login');
            if (request()->hasCookie('loginToken')) {
                $tempToken = request()->cookie('loginToken');
                $request->headers->set('Authorization', sprintf('%s %s', 'Bearer', $tempToken));
            } else {
                $user->tokens()->delete();
                Session::forget("login");
            }
        }

        return $next($request);
    }
}
