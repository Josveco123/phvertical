@extends('home')
@section('proceso')
    <span class="text-lg">Mantenimiento Usuarios ==> crear Usuario</span>
@endsection
    @section('crud')
        <div class="py-2 h-auto">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 h-auto">
                <h2
                    class="flex flex-row justify-center align-content-center font.bold text-2xl text-gray-800 border-y-2 border-dashed bg-gray-200 border-gray-300 dark:text-white leading-tight">
                    Creacion de Usuarios
                </h2>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8 h-auto">

                    <!--comienza el formulario        --->

                    <form method="POST" action="{{ route('userstore') }}" enctype="multipart/form-data"
                        class="max-w-2xl mx-auto">
                        @csrf

                        <div class="mb-2">
                            <label for="name"
                                class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Nombre</label>
                            <input type="text" name="name" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required>
                        </div>

                        <div class="flex flex-row max-w-full space-x-10 justify-between">
                            <div class="mb-2 w-full">
                                <label for="email"
                                    class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">email</label>
                                <input type="text" name="email" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                            </div>

                        </div>

                        <div class="flex flex-row max-w-full space-x-10 justify-between">
                            <div class="mb-2 w-full">
                                <label for="password"
                                    class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Clave</label>
                                <input type="text" name="password" id="password"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                            </div>

                            <div class="mb-4 w-full">
                                <label for="telefono"
                                    class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Telefono</label>
                                <input type="text" name="telefono" id="telefono"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                            </div>
                        </div>

                        <div class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">
                            <div class="flex items-center">
                                <span class="mr-10 text-lg"><strong>Roles</strong></span>

                                <input type="radio" id="master-radio" name="roles" value="master"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <label for="master-radio"
                                    class="ml-2 text-lg font-medium text-gray-900 dark:text-gray-300">Master</label>

                                <input type="radio" id="admin-radio" name="roles" value="admin"
                                    class="ml-4 bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <label for="admin-radio"
                                    class="ml-2 text-lg font-medium text-gray-900 dark:text-gray-300">Admin</label>

                                <input type="radio" id="client-radio" name="roles" value="client"
                                    class="ml-4 bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <label for="client-radio"
                                    class="ml-2 text-lg font-medium text-gray-900 dark:text-gray-300">Client</label>
                            </div>
                        </div>
                        <!--
                                             mensaje error
                                    --->
                        @if ($errors->any())
                            <div class="w-full flex flex-row  bg-red-100 border border-red-400 text-red-700 px-1 py-1 rounded relative"
                                role="alert">
                                <strong class="font-bold text-sm mr-10">Error!</strong>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li class="text-sm">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!--botones de seleccion        --->
                        <div class="flex flex-row justify-center  items-center space-x-20 w-full mt-10">
                            <button type="submit"
                                class="border-2 border-black  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Save
                            </button>

                            <a href="{{ route('userindex') }}"
                                class=" text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-lg w-full sm:w-auto px-5 py-2.5 text-center dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800">
                                Cancel
                            </a>

                        </div>

                    </form>

                </div>
            </div>
        </div>
    @endsection
<!-- Script para ver la imagen antes de CREAR UN NUEVO PRODUCTO -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
