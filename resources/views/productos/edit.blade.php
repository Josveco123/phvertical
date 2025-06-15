@extends('home')

@section('crud')
    <div class="py-12">
        <div class="w-full px-10 sm:px-6 ">
            <h2
                class="flex flex-row justify-center align-content-center font.bold text-2xl text-gray-800 border-y-2 border-dashed bg-gray-200 border-gray-300 dark:text-white leading-tight">
                Edicion de Productos
            </h2>
            <div class="flex flex-col h-auto bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-5">

                <form method="POST" action="{{ route('productoupdate', $productos->id) }}" class="w-full"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="flex flex-row space-x-4">
                        <div class="w-10/12">
                            <label for="nonbre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Nombre
                            </label>
                            <input type="text" name="nombre" id="nombre"
                                value="{{ old('name', $productos->nombre) }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required>
                        </div>
                        <div class="w-2/12">
                            <label for="codigo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                codigo
                            </label>
                            <input type="text" name="codigo" id="codigo"
                                value="{{ old('name', $productos->codigo) }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required>
                        </div>
                    </div>


                    @if ($errors->any())
                        <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                            role="alert">
                            <strong class="font-bold">Error!</strong>
                            <span class="block sm:inline">{{ $errors->first() }}</span>
                        </div>
                    @endif

                    <div class="mb-2">
                        <label for="presentacion"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Presentacion</label>
                        <input type="text" name="presentacion" id="presentacion"
                            value="{{ old('presentacion', $productos->presentacion) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                    </div>
                    <div class="mb-1">
                        <label for="slogan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">slogan</label>
                        <input type="text" name="slogan" id="slogan"
                            value="{{ old('slogan', $productos->presentacion) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                    </div>


                    <div class="mt-4 w-full flex flex-row justify-center items-center text-center space-x-10 h-auto">

                        <!-- Comienza insertar ficha -->


                        <div class="flex flex-col justify-center items-center text-center w-full h-full">

                            <label
                                class="w-auto flex flex-row justify-center text-center uppercase md:text-sm text-xs text-gray-500 font-semibold mb-1 h-6 ">
                                Subir Ficha
                            </label>
                            <div class='flex flex-col items-center justify-center w-auto h-full'>
                                <label
                                    class='flex flex-col border-4 border-dashed w-auto h-full hover:bg-gray-100 hover:border-purple-300 group'>
                                    <div class='w-full relative flex flex-col items-center justify-center p-1 h-full'>
                                        <div
                                            class="absolute zone-10 flex items-center justify-center mt-1 mx-1 w-full h-full bg-transparent p-1">

                                            <img id="fichaSeleccionada" src="/imagen/{{ $productos->ficha }}"
                                                class="w-full h-full object-contain">
                                        </div>
                                        <svg class="w-auto h-20 text-purple-400 group-hover:text-purple-600" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                            </path>
                                        </svg>

                                    </div>
                                    <input name="ficha" id="ficha" type='file' class="hidden" />
                                </label>
                            </div>
                        </div>


                        <!-- Comienza insertar imagen -->


                        <div class="flex flex-col justify-center items-center text-center w-full h-full">

                            <label
                                class="w-auto flex flex-row justify-center text-center uppercase md:text-sm text-xs text-gray-500 font-semibold mb-1 h-6 ">
                                Subir Imagen
                            </label>

                            <div class='flex items-center justify-center w-auto h-full'>

                                <label
                                    class='flex flex-col border-4 border-dashed w-auto h-full hover:bg-gray-100 hover:border-purple-300 group'>
                                    <div class='min-w-40 relative flex flex-col items-center justify-center p-1 h-full'>
                                        <div
                                            class="absolute zone-10 flex items-center justify-center mt-1 mx-1 w-full h-full bg-transparent p-1">
                                            <img id="imagenSeleccionada" src="/imagen/{{ $productos->imagen }}"
                                                class="w-full h-full object-contain">
                                        </div>
                                        <svg class="w-auto h-16 text-purple-400 group-hover:text-purple-600" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                        >
                                    </div>
                                    <input name="imagen" id="imagen" type='file' class="hidden" />
                                </label>
                            </div>
                        </div>



                        <div class="w-full h-auto flex flex-col space-y-8 justify-center items-center text-center">
                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Save</button>
                            <a href="{{ route('productoindex') }}"
                                class="text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800">
                                Cancel</a>
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
<script>
    $(document).ready(function(e) {
        $('#ficha').change(function() {
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#fichaSeleccionada').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });
    });
</script>
