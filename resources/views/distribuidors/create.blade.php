@extends('home')

@section('crud')
    <div class="flex flex-col w-full pb-4 pt-2 h-auto px-20">

        <div class="w-full mx-auto sm:px-6 lg:px-8 h-auto py-2">
            <h2
                class="flex flex-row justify-center align-content-center font.bold text-2xl text-gray-800 border-y-2 border-dashed bg-gray-200 border-gray-300 dark:text-white leading-tight">
                Creacion de Distribuidor
            </h2>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-3 lg:p-8 h-auto">

                <form method="POST" action="{{ route('distribuidorstore') }}" enctype="multipart/form-data"
                    class="max-w-2xl mx-auto">
                    @csrf

                    <div class="mb-2">
                        <label for="nombre"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
                        <input type="text" name="nombre" id="nombre"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                    </div>

                    @if ($errors->any())
                        <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                            role="alert">
                            <strong class="font-bold">Error!</strong>
                            <span class="block sm:inline">{{ $errors->first() }}</span>
                        </div>
                    @endif
                    <div class="mb-2">
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">email</label>
                        <input type="text" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                    </div>
                    <div class="mb-2">
                        <label for="telefono"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefono</label>
                        <input type="text" name="telefono" id="telefono"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                    </div>
                    <div class="mb-2">
                        <label for="direccion"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Direccion</label>
                        <input type="text" name="direccion" id="direccion"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                    </div>
                    <div class="mb-2">
                        <label for="ciudad"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ciudad</label>
                        <input type="text" name="ciudad" id="ciudad"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                    </div>
                    <div>
                        <label for="web"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Web</label>
                        <input type="text" name="web" id="web"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                    </div>


                    <div class="flex flex-row justify-center items-center text-center space-x-10  h-auto">

                        <!-- Comienza insertar imagen -->


                            <div class="flex flex-col justify-center items-center text-center w-full h-auto">

                                <label class="uppercase md:text-sm text-xs text-gray-500 font-semibold mb-1 h-6 ">
                                    Subir Imagen
                                </label>

                                <div class='flex items-center justify-center text-center w-auto h-full'>

                                    <label
                                        class='flex flex-col border-4 border-dashed w-full h-full hover:bg-gray-100 hover:border-purple-300 group'>
                                        <div class='relative flex flex-col items-center justify-center p-1 h-full'>
                                            <div
                                                class="absolute zone-10 flex items-center justify-center mt-1 mx-1 w-full h-full bg-transparent p-1">
                                                <img id="imagenSeleccionada" class="w-full h-full object-contain"
                                                    style="max-width: 100%; max-height: 100%;" src="url_de_tu_ficha.pdf">
                                            </div>
                                            <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                                </path>
                                            </svg>
                                            <p
                                                class='text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>
                                                Seleccione la imagen
                                            </p>
                                        </div>
                                        <input name="imagen" id="imagen" type='file' class="hidden" />
                                    </label>
                                </div>
                            </div>

                        <!--botones de seleccion        --->
                        <div class="flex flex-col justify-end items-center space-y-6 w-[10vw]">
                            <button type="submit"
                                class="border-2 border-black mt-10 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Save
                            </button>

                            <a href="{{ route('distribuidorindex') }}"
                                class=" text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800">
                                Cancel
                            </a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

<!-- Script para ver la imagen antes de CREAR UN NUEVO PRODUCTO -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
    $(document).ready(function(e) {
        $('#imagen').change(function() {
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#imagenSeleccionada').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });
    });
</script>

