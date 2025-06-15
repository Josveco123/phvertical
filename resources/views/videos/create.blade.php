@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-4">Agregar Nuevo Video</h5>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('videos.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="id_props" class="form-label">Propiedad:</label>

                        @if(isset($prop_id))
                            @php
                                $selectedProp = $propiedades->firstWhere('id', $prop_id);
                            @endphp

                            {{-- Campo oculto con el ID --}}
                            <input type="hidden" name="id_props" value="{{ $prop_id }}">

                            {{-- Mostrar el nombre de la propiedad (solo lectura) --}}
                            <input type="text" class="form-control" value="{{ $selectedProp->title ?? 'Propiedad no encontrada' }}" disabled>
                        @else
                            {{-- Select normal si no viene el ID --}}
                            <select name="id_props" id="id_props" class="form-select" required>
                                <option value="">-- Selecciona una propiedad --</option>
                                @foreach ($propiedades as $propiedad)
                                    <option value="{{ $propiedad->id }}">{{ $propiedad->title }}</option>
                                @endforeach
                            </select>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="video" class="form-label">Archivo de video:</label>
                        <input type="file" name="video" id="video" accept="video/*" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Subir video</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
