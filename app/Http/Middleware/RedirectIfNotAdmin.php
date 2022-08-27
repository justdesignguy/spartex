<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->guard('admins')->check()){
            return $next($request);
        }
        return redirect()->route('admin.login');
    }
}
