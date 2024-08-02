@extends('layouts.admin')


@section('content')
<div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
            @if (\Session::has('success'))
                <div class="alert alert-success">
                            <p>{!! \Session::get('success') !!}</p>
                </div>
            @endif
            @if (\Session::has('success_gallery'))
                <div class="alert alert-success">
                            <p>{!! \Session::get('success_gallery') !!}</p>
                </div>
            @endif
            @if (\Session::has('delete'))
              <div class="alert alert-success">
                          <p>{!! \Session::get('delete') !!}</p>
              </div>
             @endif


          <h5 class="card-title mb-4 d-inline">Galeria de Imagenes</h5>

          <table class="table mt-4">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Cod_Prop</th>
                <th scope="col">Title_Prop</th>
                <th scope="col">Nombre_Img</th>
                <th scope="col">imagen_galleria</th>
                <th scope="col">Eliminar</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($allGallery as $gallery)
                    <tr>
                        <th scope="row">{{ $gallery->id }}</th>
                        <td>{{ $gallery->prop_id }}</td>
                        <td>{{ $gallery->property->title }}</td>
                        <td>${{ $gallery->image }}</td>
                        <td>
                            <!-- Establecer tamaño específico con Tailwind -->
                            <img src="{{ asset('storage/images_gallery/'.$gallery->image) }}" alt="Image"
                                 style="width: 80px; height:60px;">
                        </td>
                        <td>
                            <a href="{{ route('gallery.delete', $gallery->id) }}" class="btn btn-danger text-center">delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>

          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
