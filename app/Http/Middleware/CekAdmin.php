<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CekAdmin
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

        $cek_users = session('data_login');
        // $cookie = Cookie::get('remember_me');
        if ($cek_users) {
            View::share('users', $cek_users);
            return $next($request);
            // } elseif (!$cookie == null) {
            //     session(['data_login' => $cookie]);
            //     return $next($request);
        } else {
            return redirect()->route('login-admin');
        }
    }
}
