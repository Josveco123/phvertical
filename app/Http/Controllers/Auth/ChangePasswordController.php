<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Controllers\Controller;


class ChangePasswordController extends Controller
{
    public function index()
    {
        return view('auth.change');
    }

    public function store(Request $request)
    {
        try {
            // Validación de la solicitud
            $request->validate([
                'current_password' => 'required',
                'new_password' => 'required|min:8|confirmed',
            ]);

            // Obtener el usuario autenticado
            $user = Auth::user();

            // Verificar la contraseña actual
            if (!Hash::check($request->current_password, $user->password)) {
                return back()->withErrors(['current_password' => 'La contraseña actual no es correcta']);
            }

            // Actualizar la contraseña del usuario
            $user->password = Hash::make($request->new_password);
            $user->save();

            // Retornar éxito
            return back()->with('success', 'Contraseña cambiada correctamente');
        } catch (\Exception $e) {
            // Manejo de excepciones
            return back()->withErrors(['error' => 'Ha ocurrido un error: ' . $e->getMessage()]);
        }
    }
}
