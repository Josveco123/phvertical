@extends('home')

@section('crud')
    <div class="flex flex-col w-full pt-3 pb-4 h-auto px-10">

        <div class="w-full mx-auto px-4 h-auto">
            <h2
                class="flex flex-row justify-center align-content-center font.bold text-2xl text-gray-800 border-y-2 border-dashed bg-gray-200 border-gray-300 dark:text-white leading-tight">
                Creacion de Blogs
            </h2>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-3 lg:p-5 h-auto">

                <!--comienza el formulario        --->

                <form method="POST" action="{{ route('blogstore') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-2">
                        <label for="nombre" class="block  text-sm font-medium text-gray-900 dark:text-white">Titulo</label>
                        <input type="text" name="titulo" id="titulo"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                    </div>

                    @if ($errors->any())
                        <div class="mb-2 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                            role="alert">
                            <strong class="font-bold">Error!</strong>
                            <span class="block sm:inline">{{ $errors->first() }}</span>
                        </div>
                    @endif

                    <div class="mb-2">
                        <label for="presentacion"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripcion</label>
                        <textarea name="descripcion" id="descripcion"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full h-[10vh] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required></textarea>
                    </div>

                    <div class="mb-1">
                        <label for="slogan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bibliografia</label>
                        <textarea name="bibliografia" id="bibliografia"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full h-[10vh] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required></textarea>
                    </div>

                    <div class="flex flex-row justify-center space-x-20 pt-10 h-auto">

                        <!-- Comienza insertar imagen -->
                        <div class="w-auto h-auto flex flex-col justify-center items-center text-center" >

                            <div class="flex flex-col w-auto h-full ">

                                <label class="w-auto flex flex-row justify-center text-center  uppercase md:text-sm text-xs text-gray-500 font-semibold mb-1 h-6 ">
                                    Subir Imagen
                                </label>

                                <div class='flex items-center justify-center w-auto h-auto'>

                                    <label
                                        class='flex flex-col border-4 border-dashed w-auto h-full hover:bg-gray-100 hover:border-purple-300 group'>
                                        <div class='relative flex flex-col items-center justify-center p-2 h-auto '>
                                            <div
                                                class="absolute zone-10 flex items-center justify-center mt-1 mx-1 min-w-40 h-full bg-transparent p-1">
                                                <img id="imagenSeleccionada" class="w-auto h-full object-contain"
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
                        </div>


                        <!--botones de seleccion        --->
                        <div class="w-auto h-auto flex flex-col space-y-8 justify-center items-center text-center">
                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Save
                            </button>
                            <a href="{{ route('blogindex') }}"
                                class="text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800">
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
