@extends('layouts.admin')


@section('content')

<div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-5 d-inline">Actualizar tipos de propiedad</h5>
      <form method="POST" action="{{ route('hometypes.update', $homeType->id) }}" enctype="multipart/form-data">
            <!-- Email input -->
            @csrf
            <div class="form-outline mb-4 mt-4">
              <input type="text" value="{{ $homeType->hometypes }}" name="hometypes" id="form2Example1" class="form-control" placeholder="hometype" />
              @error('hometypes')
              <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>


            <!-- Submit button -->
            <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">Actualizar</button>


          </form>

        </div>
      </div>
    </div>
  </div>
@endsection
