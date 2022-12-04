<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginMiddleware
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

            if ($user->user_role == "0") {
                return redirect()->route('owner');
            } else if ($user->user_role == "1") {
                return redirect()->route('manajer');
            } else if ($user->user_role == "2") {
                return redirect()->route('teknisi');
            } else {
                return redirect()->route('kasir');
            }
        } else {
            return $next($request);
        }
    }
}
