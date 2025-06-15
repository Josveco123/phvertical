<?php


namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CrudMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            $user = Auth::user();
            // Verifica el correo electrónico del usuario y redirige según corresponda
            if ($user->email === 'Josever1@hotmail.com') {
                return $next($request);
            } else {
                // Si el correo electrónico no coincide, redirige a otra ruta o muestra un error
                return redirect('/'); // O cualquier otra acción que desees
            }
        }

        // Si el usuario no está autenticado, redirige a la página de inicio de sesión
        return redirect('/login');
    }
}


