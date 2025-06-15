@extends('home')
@section('proceso')
    <span class="text-lg">Mantenimiento Usuarios</span>
@endsection

@section('crud')
    <div class="py-10">
        <div class="max-w-full  mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">

                    <div class="mb-4 h-12 flex flex-row">
                        <a href="{{ route('usercreate') }}"
                            class="text-lg pt-2 bg-cyan-500 text-center items-center justify-center dark:bg-cyan-700 hover:bg-cyan-600 dark:hover:bg-cyan-800 text-white font-bold py-2 px-4 rounded">
                            Crear Usuario
                        </a>

                        @if (session('success'))
                            <div id="success" class="ml-auto alert alert-success bg-yellow-50 p-1">
                                <strong class="text-lg border-red-300 text-red-700">
                                    {{ session('success') }}
                                </strong>
                            </div>
                        @endif
                    </div>
                    <script>
                        document.addEventListener('click', function() {
                            var successDiv = document.getElementById('success');
                            if (successDiv) {
                                successDiv.style.display = 'none';
                            }
                        });
                    </script>
                    <table class="table-auto w-full text-[.8vw]">
                        <thead>
                            <tr>
                                <th class="px-2 py-2 text-gray-900 dark:text-white text-center">Id</th>
                                <th class="px-2 py-2 text-gray-900 dark:text-white text-center">Nombre</th>
                                <th class="px-2 py-2 text-gray-900 dark:text-white text-center">Email</th>
                                <th class="px-2 py-2 text-gray-900 dark:text-white text-center">Clave</th>
                                <th class="px-2 py-2 text-gray-900 dark:text-white text-center">Whapsapp</th>
                                <th class="px-2 py-2 text-gray-900 dark:text-white text-center">Rol</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                @foreach ($user->roles as $role)
                                    @if ($role->name != 'client')
                                        <tr>
                                            <td class="border px-2 py-2 text-gray-900 dark:text-white text-center">
                                                {{ $user->id }}</td>
                                            <td class="border px-2 py-2 text-gray-900 dark:text-white text-center">
                                                {{ $user->name }}</td>
                                            <td class="border px-2 py-2 text-gray-900 dark:text-white text-center">
                                                {{ $user->email }}</td>
                                            <td class="border px-2 py-2 text-gray-900 dark:text-white text-center">
                                                {{ $user->password }}</td>
                                            <td class="border px-2 py-2 text-gray-900 dark:text-white text-center">
                                                {{ $user->whatsapp }}</td>
                                            <td class="border px-2 py-2 text-gray-900 dark:text-white text-center">
                                                {{ $role->name }}</td>
                                            <td class="border px-2 py-2 text-center">
                                                <div class="flex justify-center">
                                                    <a href="{{ route('useredit', $user->id) }}"
                                                        class="bg-violet-500 dark:bg-violet-700 hover:bg-violet-600 dark:hover:bg-violet-800 text-white font-bold py-2 px-2 rounded mr-2">Edit</a>
                                                    <button type="button"
                                                        class="bg-pink-400 dark:bg-pink-600 hover:bg-pink-500 dark:hover:bg-pink-700 text-white font-bold py-2 px-2 rounded"
                                                        onclick="confirmDelete('{{ $user->id }}')">
                                                        Delete
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                    <!-- Agregar enlaces de paginación -->
                    <div class="mt-4">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    <div class="flex">
        @include('layouts.footer')
    </div>
@endsection

<script>
    function confirmDelete(id) {
        if (confirm('¿Confirmar eliminación del registro?')) {
            // Crear un formulario dinámicamente
            let form = document.createElement('form');
            form.method = 'POST';
            form.action = '/usuarios/' + id + '/destroy';
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
