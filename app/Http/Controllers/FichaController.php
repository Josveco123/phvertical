<?php

namespace App\Http\Controllers;

use App\Models\Visita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\Auth;

class FichaController extends Controller
{
    public function mostrarficha(Request $request)
    {

        $producto = json_decode($request->producto);
        // Si se está enviando una solicitud POST, es para guardar una visita
        if ($request->isMethod('post')) {

            // Obtener los datos del usuario autenticado

            $usuario = auth()->user();
            // Crear una nueva instancia de Visita con los datos recibidos
            $visita = new Visita();
            $visita->nombre = $usuario->name;
            $visita->razon_social = $usuario->razon_social;
            $visita->whatsapp = $usuario->whatsapp;
            $visita->ciudad = $usuario->ciudad;
            $visita->producto = $producto->nombre;
            $visita->fecha_visita = now(); // Obtener la fecha actual
            $visita->user_id = $usuario->id; // Obtener el ID del usuario autenticado

            // Guardar la visita en la base de datos
            $visita->save();
        }

        // Si hay un archivo especificado, lo pasamos a la vista

        if ($producto->ficha !== null) {
            return $this->generarPDF($producto->ficha);
        };
    }

    private function generarPDF($nombreImagen)
    {
        $rutaImagen = public_path('/imagen/' . $nombreImagen);

        // Verifica si la imagen existe
        if (file_exists($rutaImagen)) {
            // Carga el contenido de la imagen
            $contenidoImagen = file_get_contents($rutaImagen);

            // Crea una instancia de Dompdf
            $dompdf = new Dompdf();

            // Genera el HTML con la etiqueta de imagen que muestra la imagen JPG con tamaño ajustado
            $html = '<img src="data:image/jpeg;base64,' . base64_encode($contenidoImagen) . '" style="max-width: 100%; height: auto;">';

            // Carga el HTML en Dompdf
            $dompdf->loadHtml($html);

            // Renderiza el PDF
            $dompdf->render();

            // Retorna la respuesta con el PDF generado
            return response($dompdf->output(), 200)
                ->header('Content-Type', 'application/pdf')
                ->header('Content-Disposition', 'inline; filename="archivo.pdf"');
        } else {
            // Si la imagen no existe, devuelve un mensaje de error o realiza alguna otra acción adecuada
            return response()->json(['error' => 'La imagen no pudo ser encontrada'], 404);
        }
    }
}
