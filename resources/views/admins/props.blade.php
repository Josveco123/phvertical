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


          <h5 class="card-title mb-4 d-inline">Propiedades</h5>
          <a href="{{ route('props.create') }}" class="btn btn-primary mb-4 text-center float-right ">Crear Propiedad</a>
          <a href="{{ route('gallery.create') }}" class="btn btn-primary mb-4 text-center float-right mr-5">Crear Galeria</a>

          <table class="table mt-4">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">titulo</th>
                <th scope="col">precio</th>
                <th scope="col">tipo propiedad</th>
                <th scope="col">tipo</th>
                <th scope="col">ciudad</th>
                <th scope="col">Eliminar</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($props as $prop)
                  <tr>
                    <th scope="row">{{ $prop->id }}</th>
                    <td>{{ $prop->title }}</td>
                    <td>${{ $prop->price }}</td>
                    <td>{{ $prop->home_type }}</td>
                    <td>{{ $prop->type }}</td>
                    <td>{{ $prop->city }}</td>
                     <td><a href="{{ route('props.delete', $prop->id) }}" class="btn btn-danger  text-center ">delete</a></td>
                  </tr>
                @endforeach



            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
