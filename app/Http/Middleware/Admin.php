<?php

namespace App\Http\Middleware;

use App\Models\Category;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return string
     */
    public function handle(Request $request, Closure $next)
    {
        $name= Auth::user()->role->name?? null;
        if ($name==="admin" || $name==="super_admin") {

            return $next($request);

        }

        abort(403);;





    }
}
