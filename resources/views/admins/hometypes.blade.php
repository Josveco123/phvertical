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

            @if (\Session::has('update'))
                        <div class="alert alert-success">
                                    <p>{!! \Session::get('update') !!}</p>
                        </div>
            @endif

            @if (\Session::has('delete'))
            <div class="alert alert-success">
                                    <p>{!! \Session::get('delete') !!}</p>
                        </div>
            @endif

          <h5 class="card-title mb-4 d-inline">Tipos de Propiedad</h5>
          <a href="{{ route('hometypes.create') }}" class="btn btn-primary mb-4 text-center float-right">Crear tipod de Propiedad</a>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">nombre</th>
                <th scope="col">Actualizar</th>
                <th scope="col">Eliminar</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($allHomeTypes as $hometype)
                  <tr>
                    <th scope="row">{{ $hometype->id }}</th>
                    <td>{{ $hometype->hometypes }}</td>
                    <td><a  href="{{ route('hometypes.edit', $hometype->id) }}" class="btn btn-warning text-white text-center ">Actualizar</a></td>
                    <td><a href="{{ route('hometypes.delete', $hometype->id) }}" class="btn btn-danger  text-center ">Eliminar</a></td>
                  </tr>
                @endforeach


            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
