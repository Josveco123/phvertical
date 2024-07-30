<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckForAuth
{

    public function handle(Request $request, Closure $next): Response
    {

        if ($request->is('admin/login')) {

            if (Auth::check() && Auth::user()->role === 'master') {

                return $next($request);
            } else {
                //
            }
        }
return redirect()->route('home');
    }
}
