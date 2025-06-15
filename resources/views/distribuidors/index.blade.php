@extends('home')
@section('proceso')
    <span class="text-lg">Procesando distribuidores</span>
@endsection
@section('crud')
    <div class="pb-10 pt-3">
        <div class="max-w-full  mx-auto sm:px-6 lg:px-8 pb-2">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">

                    <div class="mb-4">
                        <a href="{{ route('distribuidorcreate') }}"
                            class="text-[1vw] bg-cyan-500 dark:bg-cyan-700 hover:bg-cyan-600 dark:hover:bg-cyan-800 text-white font-bold py-2 px-4 rounded">
                            Crear distribuidor</a>
                    </div>

                    <table class="table-auto w-full text-[.9vw]">
                        <thead>
                            <tr>
                                <th class="px-2 py-2 text-gray-900 dark:text-white text-center">Id</th>
                                <th class="px-2 py-2 text-gray-900 dark:text-white text-center">Nombre</th>
                                <th class="px-2 py-2 text-gray-900 dark:text-white text-center">Email</th>
                                <th class="px-2 py-2 text-gray-900 dark:text-white text-center">Telefono</th>
                                <th class="px-2 py-2 text-gray-900 dark:text-white text-center">Direccion</th>
                                <th class="px-2 py-2 text-gray-900 dark:text-white text-center">Ciudad</th>
                                <th class="px-2 py-2 text-gray-900 dark:text-white text-center">Pagina Web</th>
                                <th class="px-2 py-2 text-gray-900 dark:text-white text-center">Imagen</th>
                                <th class="px-2 py-2 text-gray-900 dark:text-white text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($distribuidors as $distribuidor)
                                <tr>
                                    <td class="border px-2 py-2 text-gray-900 dark:text-white text-center">
                                        {{ $distribuidor->id }}</td>
                                    <td class="border px-2 py-2 text-gray-900 dark:text-white text-center">
                                        {{ $distribuidor->nombre }}</td>
                                    <td class="border px-2 py-2 text-gray-900 dark:text-white text-center">
                                        {{ $distribuidor->email }}</td>
                                    <td class="border px-2 py-2 text-gray-900 dark:text-white text-center">
                                        {{ $distribuidor->telefono }}</td>
                                    <td class="border px-2 py-2 text-gray-900 dark:text-white text-center">
                                        {{ $distribuidor->direccion }}</td>
                                    <td class="border px-2 py-2 text-gray-900 dark:text-white text-center">
                                        {{ $distribuidor->ciudad }}</td>
                                    <td class="border px-2 py-2 text-gray-900 dark:text-white text-center">
                                        {{ $distribuidor->web }}</td>
                                    <td class=" border px-2 py-2 text-gray-900 dark:text-white text-center">
                                        <img src="imagendist/{{ $distribuidor->imagen }}" class="w-16 h-h-[3vw]"
                                            alt="Imagen del imagendist">
                                    </td>
                                    <td class="border px-2 py-2 text-center">
                                        <div class="flex justify-center">
                                            <a href="{{ route('distribuidoredit', $distribuidor->id) }}"
                                                class="bg-violet-500 dark:bg-violet-700 hover:bg-violet-600 dark:hover:bg-violet-800 text-white font-bold py-2 px-2 rounded mr-2">Edit</a>
                                            <button type="button"
                                                class="bg-pink-400 dark:bg-pink-600 hover:bg-pink-500 dark:hover:bg-pink-700 text-white font-bold py-2 px-2 rounded"
                                                onclick="confirmDelete('{{ $distribuidor->id }}')">
                                                Delete
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- Agregar enlaces de paginación -->
                    <div class="mt-4">
                        <nav class="w-full relative z-0 inline-flex shadow-sm">
                            <div class="w-full">
                                <span
                                    class="w-full justify-center relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm">
                                    {!! $distribuidors->links()->render() !!}
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
            form.action = '/distribuidor/' + id + '/destroy';
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
