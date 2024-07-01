@extends('layouts.admin')

@section('content')
<div class="row">

    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Propiedades</h5>
          <!-- <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 Snippet by pradeep330</h6> -->
          <p class="card-text">Numero de propiedades: {{ $propsCount }}</p>

        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Tpos de propiedad</h5>

          <p class="card-text">Numero de tipos de propiedad: {{ $hometypesCount}}</p>

        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Administradores</h5>

          <p class="card-text">Numero de Administradores: {{ $adminsCount }}</p>

        </div>
      </div>
    </div>
  </div>
@endsection
