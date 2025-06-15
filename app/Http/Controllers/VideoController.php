<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video\Video;
use Illuminate\Support\Facades\Storage;
use App\Models\Prop\Property;
use Illuminate\Support\Str;
class VideoController extends Controller
{
public function index()
{
    $props = Property::with('video')->get(); // todas las propiedades con su video (si existe)
    return view('videos.index', compact('props'));
}

    // Mostrar formulario para crear un video

public function create(Request $request)
{
    $prop_id = $request->input('prop_id');

    // Obtener todas las propiedades disponibles (o solo las que no tienen video, si deseas)
    $propiedades = Property::all();

    return view('videos.create', compact('propiedades', 'prop_id'));
}

public function store(Request $request)
{
    $validated = $request->validate([
        'id_props' => 'required|exists:props,id',
        'video' => 'required|file|mimetypes:video/mp4,video/avi,video/mpeg|max:102400', // 100MB max
    ]);

    // Verificar si ya existe un video para esta propiedad
    $existe = Video::where('id_props', $validated['id_props'])->exists();

    if ($existe) {
        return redirect()->back()->withErrors(['video' => 'Esta propiedad ya tiene un video asignado.']);
    }

    $file = $request->file('video');
    $filename = 'video_prop_' . $validated['id_props'] . '_' . time() . '.' . $file->getClientOriginalExtension();

    $file->move(public_path('storage/video'), $filename);

    Video::create([
        'id_props' => $validated['id_props'],
        'nombre' => $filename,
        // si tienes la columna url, puedes guardarla también
        // 'url' => 'storage/video/' . $filename,
    ]);

    return redirect()->route('videos.index')->with('success', 'Video subido correctamente');
}


    // Mostrar formulario para editar video
    public function edit($id)
    {
        $video = Video::findOrFail($id);
        return view('videos.edit', compact('video'));
    }

    // Actualizar video y reemplazar archivo si hay nuevo
    public function update(Request $request, $id)
    {
        $video = Video::findOrFail($id);

        $request->validate([
            'video' => 'nullable|mimes:mp4,avi,mov,webm|max:20480',
        ]);

        if ($request->hasFile('video')) {
            // Eliminar video viejo
            Storage::delete('public/video/' . $video->nombre);

            // Subir nuevo archivo
            $file = $request->file('video');
            $extension = $file->getClientOriginalExtension();
            $fileName = 'video' . $video->id_props . '.' . $extension;
            $file->storeAs('public/video', $fileName);

            $video->nombre = $fileName;
        }

        $video->save();

        return redirect()->back()->with('success', 'Video actualizado correctamente.');
    }

    // Mostrar video (puedes usar para una página de detalles)
public function show($id, $title, Request $request)
{
    // 1. Busca el registro
    $video = Video::find($id);
    if (! $video) {
        return redirect()->back()->with('error', 'No tiene video Grabado');
    }

    // 2. Comprueba que el archivo exista
    $relativePath = 'video/' . $video->nombre;              // dentro de storage/app/public
    if (! Storage::disk('public')->exists($relativePath)) {
        return redirect()->back()->with('error', 'Archivo de video no encontrado en el servidor.');
    }

    // 3. Todo OK, carga la vista
    return view('videos.show', compact('video','title'));
}

    // Eliminar video y archivo físico

public function destroy($id)
{
    // 1. Encuentra el video
    $video = Video::findOrFail($id);

    // 2. Borra el archivo físico
    //    Asumiendo que lo guardaste en storage/app/public/video/{nombre}
    Storage::disk('public')->delete('video/' . $video->nombre);

    // 3. Borra el registro en la BD
    $video->delete();

    // 4. Redirecciona con mensaje
    return redirect()->route('videos.index')
                     ->with('success', 'Video eliminado correctamente.');
}

}

