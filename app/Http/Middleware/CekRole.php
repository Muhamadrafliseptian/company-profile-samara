<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CekRole
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
        $id_role = Auth::user()->id_role;

        if ($id_role == 1) {
            $bool = true;
        } else {
            $bool = false;
        }

        if (Auth::user() && Auth::user()->id_role == $bool) {
            return $next($request);
        } else {
            return redirect("/admin/dashboard");
        }
    }
}
