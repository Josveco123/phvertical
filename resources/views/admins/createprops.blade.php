@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
            <h5 class="card-title mb-5 d-inline">Crear Propiedad</h5>

            <!-- Mostrar errores generales -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('props.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-outline mb-4 mt-4">
                    <input type="text" name="title" id="form2Example1" class="form-control" placeholder="title" value="{{ old('title') }}" />
                    @if ($errors->has('title'))
                        <div class="text-danger">{{ $errors->first('title') }}</div>
                    @endif
                </div>
                <div class="form-outline mb-4 mt-4">
                    <input type="text" name="price" id="form2Example1" class="form-control" placeholder="price" value="{{ old('price') }}" />
                    @if ($errors->has('price'))
                        <div class="text-danger">{{ $errors->first('price') }}</div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Imagenes de Propiedad</label>
                    <input name="image" class="form-control" type="file" id="formFile">
                    @if ($errors->has('image'))
                        <div class="text-danger">{{ $errors->first('image') }}</div>
                    @endif
                </div>
                <div class="form-outline mb-4 mt-4">
                    <input type="text" name="beds" id="form2Example1" class="form-control" placeholder="beds" value="{{ old('beds') }}" />
                    @if ($errors->has('beds'))
                        <div class="text-danger">{{ $errors->first('beds') }}</div>
                    @endif
                </div>
                <div class="form-outline mb-4 mt-4">
                    <input type="text" name="baths" id="form2Example1" class="form-control" placeholder="baths" value="{{ old('baths') }}" />
                    @if ($errors->has('baths'))
                        <div class="text-danger">{{ $errors->first('baths') }}</div>
                    @endif
                </div>
                <div class="form-outline mb-4 mt-4">
                    <input type="text" name="sq_ft" id="form2Example1" class="form-control" placeholder="SQ/FT" value="{{ old('sq_ft') }}" />
                    @if ($errors->has('sq_ft'))
                        <div class="text-danger">{{ $errors->first('sq_ft') }}</div>
                    @endif
                </div>
                <div class="form-outline mb-4 mt-4">
                    <input type="text" name="year_built" id="form2Example1" class="form-control" placeholder="Year Build" value="{{ old('year_built') }}" />
                    @if ($errors->has('year_built'))
                        <div class="text-danger">{{ $errors->first('year_built') }}</div>
                    @endif
                </div>
                <div class="form-outline mb-4 mt-4">
                    <input type="text" name="price_sqft" id="form2Example1" class="form-control" placeholder="Price Per SQ FT" value="{{ old('price_sqft') }}" />
                    @if ($errors->has('price_sqft'))
                        <div class="text-danger">{{ $errors->first('price_sqft') }}</div>
                    @endif
                </div>
                <div class="form-outline mb-4 mt-4">
                    <input type="text" name="location" id="form2Example1" class="form-control" placeholder="location" value="{{ old('location') }}" />
                    @if ($errors->has('location'))
                        <div class="text-danger">{{ $errors->first('location') }}</div>
                    @endif
                </div>
                <select name="home_type" class="form-control form-select" aria-label="Default select example">
                    <option selected>Seleccione tipos</option>
                    <option value="Condominio" {{ old('home_type') == 'Condominio' ? 'selected' : '' }}>Condominio</option>
                    <option value="Comercial" {{ old('home_type') == 'Comercial' ? 'selected' : '' }}>Comercial</option>
                    <option value="Terrenos" {{ old('home_type') == 'Terrenos' ? 'selected' : '' }}>Terrenos</option>
                </select>
                @if ($errors->has('home_type'))
                    <div class="text-danger">{{ $errors->first('home_type') }}</div>
                @endif
                <select name="type" class="form-control mt-3 mb-4 form-select" aria-label="Default select example">
                    <option selected>Seleccione Tipos</option>
                    <option value="Vender" {{ old('type') == 'Vender' ? 'selected' : '' }}>Vender</option>
                    <option value="Rentar" {{ old('type') == 'Rentar' ? 'selected' : '' }}>Rentar</option>
                    <option value="Rentar" {{ old('type') == 'Rentar' ? 'selected' : '' }}>Alquiler</option>
                </select>
                @if ($errors->has('type'))
                    <div class="text-danger">{{ $errors->first('type') }}</div>
                @endif
                <select name="city" class="form-control mt-3 mb-4 form-select" aria-label="Default select example">
                    <option selected>Select City</option>
                    <option value="Sincelejo" {{ old('city') == 'Sincelejo' ? 'selected' : '' }}>Sincelejo</option>
                    <option value="Barranquilla" {{ old('city') == 'Barranquilla' ? 'selected' : '' }}>Barranquilla</option>
                    <option value="Cartagena" {{ old('city') == 'Cartagena' ? 'selected' : '' }}>Cartagena</option>
                    <option value="Monteria" {{ old('city') == 'Monteria' ? 'selected' : '' }}>Monteria</option>
                    <option value="Santa Marta" {{ old('city') == 'Santa Marta' ? 'selected' : '' }}>Santa Marta</option>
                    <option value="Valledupar" {{ old('city') == 'Valledupar' ? 'selected' : '' }}>Valledupar</option>
                </select>
                @if ($errors->has('city'))
                    <div class="text-danger">{{ $errors->first('city') }}</div>
                @endif
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Mas Informacion</label>
                    <textarea placeholder="More Info" name="more_info" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ old('more_info') }}</textarea>
                    @if ($errors->has('more_info'))
                        <div class="text-danger">{{ $errors->first('more_info') }}</div>
                    @endif
                </div>
                <div class="form-outline mb-4 mt-4">
                    <input type="text" name="agent_name" id="form2Example1" class="form-control" placeholder="agent name" value="{{ old('agent_name') }}" />
                    @if ($errors->has('agent_name'))
                        <div class="text-danger">{{ $errors->first('agent_name') }}</div>
                    @endif
                </div>
                <!-- Submit button -->
                <button type="submit" name="submit" class="btn btn-primary mb-4 text-center">create</button>
            </form>
        </div>
      </div>
    </div>
  </div>

@endsection
