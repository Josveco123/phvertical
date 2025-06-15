<?php

namespace App\Http\Controllers;

use App\Models\Productos as ModelsProductos;
use Illuminate\Http\Request;


class Productos extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $productos = ModelsProductos::paginate(5);
        $productos = ModelsProductos::orderBy('codigo')->paginate(5);

        return view('productos.index', ['productos' => $productos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario

        $request->validate([
            'nombre' => 'required|string|min:5|max:120',
            'presentacion' => 'required|string|min:5|max:120',
            'slogan' => 'required|string|min:5|max:120', // Cambiado a 'string'
            'imagen' => 'required|image|mimes:jpeg,png,svg|max:1024',
            'codigo' => 'required|string|min:0|max:15',
            'ficha' => 'required|image|mimes:jpeg,png,svg|max:1024',
        ]);

        $producto = $request->all();

        if($imagen = $request->file('imagen')) {
            $rutaGuardar = 'imagen/'; // Directorio para guardar la imagen y la ficha
            $imagenProducto = date('YmdHis'). 'imagen'. "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardar, $imagenProducto); // Mueve la imagen a la carpeta de destino
            $producto['imagen'] = $imagenProducto; // Asigna el nombre de la imagen al campo 'imagen' después de moverla
        }

        if($ficha = $request->file('ficha')) {
            $fichaProducto = date('YmdHis'). 'ficha'. ".jpg";
            $ficha->move($rutaGuardar, $fichaProducto); // Mueve la ficha a la carpeta de destino
            $producto['ficha'] = $fichaProducto; // Asigna el nombre de la ficha al campo 'ficha' después de moverla
        }
        try {
            // Crear un nuevo producto usando el método `create` del modelo
            ModelsProductos::create($producto);
            // Redireccionar a la vista de listado de productos
            return redirect()->route('productoindex');
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
        $productos = ModelsProductos::findOrFail($id);
        return view('productos.edit', ['productos' => $productos]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validar los datos del formulario

    $request->validate([
    'codigo' => 'nullable|string|min:0|max:15',
    'nombre' => 'required|string|min:5|max:120',
    'presentacion' => 'required|string|min:5|max:120',
    'slogan' => 'required|string|min:5|max:120', // Cambiado a 'string'
    'imagen' => 'nullable|image|mimes:jpeg,png,svg|max:1024',
    'ficha' => 'nullable|image|mimes:jpeg,png,svg|max:1024',
]);


$producto = ModelsProductos::findOrFail($id); // Encuentra el producto por su ID

// Actualiza los campos del producto con los datos del formulario
$producto->codigo = $request->input('codigo');
$producto->nombre = $request->input('nombre');
$producto->presentacion = $request->input('presentacion');
$producto->slogan = $request->input('slogan');

// Maneja la carga de la imagen si se proporcionó
if ($request->hasFile('imagen')) {
    // Si se proporciona una nueva imagen, la actualizamos
    $imagen = $request->file('imagen');
    $rutaGuardar = 'imagen/';
    $imagenProducto = date('YmdHis'). 'imagen'. "." . $imagen->getClientOriginalExtension();
    $imagen->move($rutaGuardar, $imagenProducto);
    $producto->imagen = $imagenProducto;
}

// Maneja la carga de la ficha si se proporcionó
if ($request->hasFile('ficha')) {
    // Si se proporciona una nueva ficha, la actualizamos
    $ficha = $request->file('ficha');
    $rutaGuardar = 'imagen/';
    $fichaProducto = date('YmdHis'). 'ficha'. "." . $ficha->getClientOriginalExtension();
    $ficha->move($rutaGuardar, $fichaProducto);
    $producto->ficha = $fichaProducto;
}

// Intenta guardar los cambios en la base de datos
try {
    $producto->save();
    // Redirecciona a la vista de listado de productos
    return redirect()->route('productoindex');
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
            // Buscar el producto por su ID
            $producto = ModelsProductos::findOrFail($id);

            // Eliminar el producto
            $producto->delete();

            // Redireccionar a la vista de listado de productos con un mensaje de éxito
            return redirect()->route('index')->with('success', 'Producto eliminado correctamente.');
        } catch (\Exception $e) {
            // Manejar cualquier excepción
            return back()->withErrors(['error' => 'Error al eliminar el producto: ' . $e->getMessage()]);
        }
    }
    public function productos()
    {
        // Obtener todos los productos desde la base de datos
       // $productos = ModelsProductos::all();
       $productos = ModelsProductos::orderBy('codigo')->get();

        return view('productos', ['productos' => $productos]);
    }
}
