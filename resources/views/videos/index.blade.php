@extends('layouts.admin')

@section('content')
<div class="container mt-4">

    <h1 class="mb-4">Listado de Videos</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($props->count())
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>Id</th>
                        <th>Propiedad</th>
                        <th class="text-center">Video</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($props as $prop)
                        <tr>
                            <td>{{ $prop->id }}</td>
                            <td>{{ $prop->title }}</td>
                            <td class="text-center">
                                @if ($prop->video)
                                    <span class="text-success fs-4">✅</span>
                                @else
                                    <span class="text-muted fs-4">⬜</span>
                                @endif
                            </td>
                            <td class="text-center">
                                @if ($prop->video)
                                    <form action="{{ route('videos.destroy', $prop->video->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('¿Seguro que deseas eliminar este video?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            🗑️ Eliminar
                                        </button>
                                    </form>
                                @else
                                    <a href="{{ route('videos.create', ['prop_id' => $prop->id]) }}" class="btn btn-success btn-sm">
                                        ⬆️ Subir Video
                                    </a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @else
        <p class="text-muted">No hay videos registrados.</p>
    @endif

</div>
@endsection
