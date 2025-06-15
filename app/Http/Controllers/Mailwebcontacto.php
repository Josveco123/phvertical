<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Webcontacto;
use Exception;

class Mailwebcontacto extends Controller
{
    public function enviarCorreo(Request $request)
    {
        $data = $request->only('name', 'email', 'phone', 'message');

        try {
            Mail::to("comercial@laboratoriodelcaribe.com")->send(new Webcontacto($data));
            return redirect()->back()->with('success', 'Correo enviado exitosamente.');
        } catch (Exception $e) {
            // Aquí capturas la excepción si el correo no se pudo enviar
            return redirect()->back()->with('error', 'El envío de correo falló. Detalle del error: ' . $e->getMessage());
        }
    }
}
