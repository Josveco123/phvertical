<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class logoutAdminController extends Controller
{
    public function destroy(Request $request): RedirectResponse
    {
        $guard = Auth::guard('admin')->check() ? 'admin' : 'web';

        Auth::guard($guard)->logout();

       // $request->session()->invalidate();
       // $request->session()->regenerateToken();

        // Redirige al usuario a la página de inicio (u otra página)

            return redirect('admin/login');

    }
}
