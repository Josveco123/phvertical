@extends('home')
@section('proceso')
    <span class="text-lg">Procesando Productos</span>
@endsection
@section('crud')
    <div class="py-10">
        <div class="max-w-full  mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">

                    <div class="mb-4">
                        <a href="{{ route('productocreate') }}"
                            class="text-[1vw] bg-cyan-500 dark:bg-cyan-700 hover:bg-cyan-600 dark:hover:bg-cyan-800 text-white font-bold py-2 px-4 rounded">
                            Crear producto</a>
                    </div>

                    <table class="table-auto w-full text-[.9vw]">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Id</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Nombre</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Presentación</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Slogan</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Imagen</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Ficha Técnica</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $producto)
                                <tr>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">
                                        {{ $producto->id }}</td>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">
                                        {{ $producto->nombre }}</td>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">
                                        {{ $producto->presentacion }}</td>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">
                                        {{ $producto->slogan }}</td>
                                    <td class=" border px-4 py-2 text-gray-900 dark:text-white text-center">
                                        <img src="/imagen/{{ $producto->imagen }}" class="w-16 h-[3vw]"
                                            alt="Imagen del producto">
                                    </td>
                                    <td
                                        class="flex flex-row justify-content-center border px-[2vw] py-2 text-gray-900 dark:text-white text-center">
                                        <img src="/imagen/{{ $producto->ficha }}" class="w-16 h-[3vw]"
                                            alt="Imagen del producto">
                                    </td>
                                    <td class="border px-4 py-2 text-center">
                                        <div class="flex justify-center text-[.9vw]">
                                            <a href="{{ route('productoedit', $producto->id) }}"
                                                class="bg-violet-500 dark:bg-violet-700 hover:bg-violet-600 dark:hover:bg-violet-800 text-white font-bold py-2 px-4 rounded mr-2">
                                                Edit</a>
                                            <button type="button"
                                                class="bg-pink-400 dark:bg-pink-600 hover:bg-pink-500 dark:hover:bg-pink-700 text-white font-bold py-2 px-4 rounded"
                                                onclick="confirmDelete('{{ $producto->id }}')">
                                                Delete
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- Agregar enlaces de paginación -->
                    <div class="flex flex-row mt-4 w-full">
                        <nav class="relative z-0 inline-flex shadow-sm w-full">
                            <div class="w-full">
                                <span class="w-full justify-center relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm">
                                    {!! $productos->links()->render() !!}
                                </span>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


<script>
    function confirmDelete(id) {
        if (confirm('¿Confirmar eliminación del registro?')) {
            // Crear un formulario dinámicamente
            let form = document.createElement('form');
            form.method = 'POST';
            form.action = '/productos/' + id + '/destroy';
            form.style.display = 'none'; // Ocultar el formulario

            // Agregar token CSRF al formulario
            let csrfField = document.createElement('input');
            csrfField.setAttribute('type', 'hidden');
            csrfField.setAttribute('name', '_token');
            csrfField.setAttribute('value', '{{ csrf_token() }}');
            form.appendChild(csrfField);

            // Agregar campo para el método DELETE al formulario
            let methodField = document.createElement('input');
            methodField.setAttribute('type', 'hidden');
            methodField.setAttribute('name', '_method');
            methodField.setAttribute('value', 'DELETE');
            form.appendChild(methodField);

            // Agregar el formulario al cuerpo del documento
            document.body.appendChild(form);

            // Enviar el formulario
            form.submit();
        }
    }
</script>
