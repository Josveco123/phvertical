<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Distribuidor as ModelsDistribuidor;
use Illuminate\Support\Facades\Storage;


class Distribuidors extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $distribuidors = ModelsDistribuidor::paginate(5);

        return view('distribuidors.index', ['distribuidors' => $distribuidors]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('distribuidors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|min:2|max:120',
            'telefono' => 'required|string|min:5|max:30',
            'email' => 'required|string|min:5|max:60', // Cambiado a 'string'
            'direccion' => 'required|string|min:5|max:255',
            'ciudad' => 'required|string|min:5|max:120',
            'web' => 'required|string|min:5|max:120',
            'imagen' => 'required|image|mimes:jpeg,png,svg|max:1024',
        ]);

        $distribuidor = $request->all();

        if($imagen = $request->file('imagen')) {
            $rutaGuardar = 'imagendist/'; // Directorio para guardar la imagen y la ficha
            $imagenProducto = date('YmdHis'). 'imagen'. "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardar, $imagenProducto); // Mueve la imagen a la carpeta de destino
            $distribuidor['imagen'] = $imagenProducto; // Asigna el nombre de la imagen al campo 'imagen' después de moverla
        }


        try {
            // Crear un nuevo producto usando el método `create` del modelo
            ModelsDistribuidor::create($distribuidor);
            // Redireccionar a la vista de listado de distribuidors
            return redirect()->route('distribuidorindex');
        } catch (\Exception $e) {
            // Manejar cualquier excepción
            return back()->withInput()->withErrors(['error' => 'Error al guardar el producto: ' . $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $distribuidors = ModelsDistribuidor::findOrFail($id);
        return view('distribuidors.edit', ['distribuidors' => $distribuidors]);
    }

    /**
     * Update the specified resource in storage.
     */


    public function update(Request $request, $id)
    {
        // Validar los datos del formulario

    $request->validate([
    'nombre' => 'required|string|min:1|max:120',
    'telefono' => 'required|string|min:1|max:120',
    'email' => 'required|string|min:5|max:120', // Cambiado a 'string'
    'direccion' => 'required|string|min:1|max:255',
    'ciudad' => 'required|string|min:2|max:120',
    'web' => 'required|string|min:2|max:120',
    'imagen' => 'nullable|image|mimes:jpeg,png,svg|max:1024',

]);


$distribuidor = ModelsDistribuidor::findOrFail($id); // Encuentra el producto por su ID

// Actualiza los campos del producto con los datos del formulario
$distribuidor->nombre = $request->input('nombre');
$distribuidor->telefono = $request->input('telefono');
$distribuidor->email = $request->input('email');
$distribuidor->direccion = $request->input('direccion');
$distribuidor->ciudad = $request->input('ciudad');
$distribuidor->web = $request->input('web');



// Maneja la carga de la imagen si se proporcionó
if ($request->hasFile('imagen')) {
    // Si se proporciona una nueva imagen, la actualizamos
    $imagen = $request->file('imagen');
    $rutaGuardar = 'imagendist/';
    $imagenProducto = date('YmdHis'). 'imagen'. "." . $imagen->getClientOriginalExtension();
    $imagen->move($rutaGuardar, $imagenProducto);
    $distribuidor->imagen = $imagenProducto;
}


// Intenta guardar los cambios en la base de datos
try {
    $distribuidor->save();
    // Redirecciona a la vista de listado de productos
    return redirect()->route('distribuidorindex');
} catch (\Exception $e) {
    // Maneja cualquier excepción
    return back()->withInput()->withErrors(['error' => 'Error al guardar el producto: ' . $e->getMessage()]);
}
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            // Buscar el distribuidor por su ID
            $distribuidor = ModelsDistribuidor::findOrFail($id);


            // Eliminar el distribuidor de la base de datos
            $distribuidor->delete();

            // Redireccionar a la vista de listado de distribuidores con un mensaje de éxito
            return redirect()->route('index')->with('success', 'Distribuidor eliminado correctamente.');
        } catch (\Exception $e) {
            // Manejar cualquier excepción
            return back()->withErrors(['error' => 'Error al eliminar el Distribuidor: ' . $e->getMessage()]);
        }
    }


    public function distribuidors()
    {
        // Obtener todos los distribuidors desde la base de datos
        $distribuidors = ModelsDistribuidor::all();

        return view('distribuidors', ['distribuidors' => $distribuidors]);
    }

    public function distribuidor2()
    {
        $distribuidores = ModelsDistribuidor::All();

        return view('distribuidores', ['distribuidores' => $distribuidores]);
    }
}

