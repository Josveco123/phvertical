<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class Usuarios extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('roles')->paginate(10);

        return view('usuarios.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8',
                'telefono' => 'required|string|max:20',
                'roles' => 'required', // Asegura que se seleccione al menos un rol
            ], [
                'name.required' => 'El campo nombre es obligatorio.',
                'email.required' => 'El campo email es obligatorio.',
                'email.email' => 'El formato del email no es válido.',
                'email.unique' => 'Este email ya está en uso.',
                'password.required' => 'El campo contraseña es obligatorio.',
                'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
                'telefono.required' => 'El campo teléfono es obligatorio.',
                'roles.required' => 'Debe seleccionar al menos un rol.',
            ]);

            // Resto del código para almacenar el usuario...

            User::create([
                'name'=> $request->name,
                'email'=>  $request->email,
                'email_verified_at'=> now(),
                'razon_social'=>'Laboratorio del Caribe',
                'whatsapp'=> '99999999999',
                'ciudad'=> 'Sincelejo',
                'password'=> bcrypt($request->password),
                'remember_token'=> Str::random(10),
             ])->assignRole($request->roles);

            // Si se ha almacenado correctamente, redirigir o hacer cualquier acción necesaria
            return redirect()->route('userindex')->with('success', 'Usuario creado correctamente.');
        } catch (ValidationException $e) {
            // Si la validación falla, redirigir de vuelta al formulario con los errores
            return redirect()->back()->withInput()->withErrors($e->validator->errors());
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

        $user = User::findOrFail($id);
        $userRole = $user->roles->first(); // Suponiendo que un usuario solo tenga un rol

        return view('usuarios.edit', compact('user', 'userRole'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|min:1|max:120',
            'email' => 'required|string|email|min:5|max:120|unique:users,email,' . $id,
            'whatsapp' => 'required|string|min:1|max:120',
            'password' => 'required|string|min:1|max:255',
            'role' => 'required|min:1', // Asegúrate de que el campo roles sea un array y que al menos haya un elemento
        ], [
            'name.required' => 'El campo nombre es obligatorio.',
            'email.required' => 'El campo email es obligatorio.',
            'email.email' => 'El formato del email no es válido.',
            'email.unique' => 'Este email ya está en uso.',
            'password.required' => 'El campo contraseña es obligatorio.',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
            'whatsapp.required' => 'El campo teléfono es obligatorio.',
            'role.required' => 'Debe seleccionar al menos un rol.',
        ]);

        try {
            $user = User::findOrFail($id); // Encuentra el usuario por su ID
            // Actualiza los campos del usuario con los datos del formulario
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->whatsapp = $request->input('whatsapp');
            $user->password = $request->input('password');
            $user->save();

            // Asigna los roles al usuario
            $user->syncRoles($request->role);

            // Redirecciona a la vista de listado de usuarios
            return redirect()->route('userindex');

        } catch (ValidationException $e) {
            // Maneja las excepciones de validación
            return redirect()->back()->withInput()->withErrors($e->validator->errors());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            // Buscar el distribuidor por su ID
            $user = User::findOrFail($id);


            // Eliminar el distribuidor de la base de datos
            $user->delete();

            // Redireccionar a la vista de listado de distribuidores con un mensaje de éxito
            return redirect()->route('index')->with('success', 'Distribuidor eliminado correctamente.');
        } catch (\Exception $e) {
            // Manejar cualquier excepción
            return back()->withErrors(['error' => 'Error al eliminar el Distribuidor: ' . $e->getMessage()]);
        }
    }
}
