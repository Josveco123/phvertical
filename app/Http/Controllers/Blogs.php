<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog as ModelsBlog;

class Blogs extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $blogs = ModelsBlog::paginate(1);

        return view('blogs.index', ['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'titulo' => 'required|string|min:2',
            'descripcion' => 'required|string|min:5',
            'bibliografia' => 'required|string|min:1', // Cambiado a 'text'
            'imagen' => 'required|image|mimes:jpeg,png,svg|max:1024',
        ]);

        $blog = $request->all();

        if($imagen = $request->file('imagen')) {
            $rutaGuardar = 'imagenblog/'; // Directorio para guardar la imagen y la ficha
            $imagenBlog = date('YmdHis'). 'imagen'. "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardar, $imagenBlog); // Mueve la imagen a la carpeta de destino
            $blog['imagen'] = $imagenBlog; // Asigna el nombre de la imagen al campo 'imagen' después de moverla
        }


        try {
            // Crear un nuevo producto usando el método `create` del modelo
            ModelsBlog::create($blog);
            // Redireccionar a la vista de listado de blogs
            return redirect()->route('blogindex');

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
        $blogs = ModelsBlog::findOrFail($id);
        return view('blogs.edit', ['blogs' => $blogs]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validar los datos del formulario

    $request->validate([
    'titulo' => 'required|string|min:5',
    'descripcion' => 'required|string|min:5',
    'bibliografia' => 'required|string|min:5', // Cambiado a 'string'
    'imagen' => 'nullable|image|mimes:jpeg,png,svg|max:1024',
]);


$blog = ModelsBlog::findOrFail($id); // Encuentra el producto por su ID

// Actualiza los campos del producto con los datos del formulario
$blog->titulo = $request->input('titulo');
$blog->descripcion = $request->input('descripcion');
$blog->bibliografia = $request->input('bibliografia');

// Maneja la carga de la imagen si se proporcionó
if ($request->hasFile('imagen')) {
    // Si se proporciona una nueva imagen, la actualizamos
    $imagen = $request->file('imagen');
    $rutaGuardar = 'imagenblog/';
    $imagenProducto = date('YmdHis'). 'imagen'. "." . $imagen->getClientOriginalExtension();
    $imagen->move($rutaGuardar, $imagenProducto);
    $blog->imagen = $imagenProducto;
}


// Intenta guardar los cambios en la base de datos
try {
    $blog->save();
    // Redirecciona a la vista de listado de productos
    return redirect()->route('blogindex');
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
            $blog = ModelsBlog::findOrFail($id);

            // Eliminar el producto
            $blog->delete();

            // Redireccionar a la vista de listado de blogs con un mensaje de éxito
            return redirect()->route('blogindex')->with('success', 'Blog eliminado correctamente.');
        } catch (\Exception $e) {
            // Manejar cualquier excepción
            return back()->withErrors(['error' => 'Error al eliminar el Blog: ' . $e->getMessage()]);
        }
    }
    public function blogs()
    {
        // Obtener todos los blogs desde la base de datos
        $blogs = ModelsBlog::all();

        return view('blogs', ['blogs' => $blogs]);
    }

    public function distribuidor2()
    {
        $bloges = ModelsBlog::All();

        return view('distribuidores', ['distribuidores' => $bloges]);
    }
}

