@extends('layouts.admin')


@section('content')

<div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
                <h5 class="card-title mb-5 d-inline">Crear Propiedad</h5>
                <form method="POST" action="{{ route('props.store') }}" enctype="multipart/form-data">
                    <!-- Email input -->
                    @csrf
                    <div class="form-outline mb-4 mt-4">
                        <input type="text" name="title" id="form2Example1" class="form-control" placeholder="title" />
                    </div>
                    <div class="form-outline mb-4 mt-4">
                        <input type="text" name="price" id="form2Example1" class="form-control" placeholder="price" />
                    </div>
                    <div class="mb-3">
                      <label for="formFile" class="form-label">Imagenes de Propiedad</label>
                        <input name="image" class="form-control" type="file" id="formFile">
                    </div>


                    <div class="form-outline mb-4 mt-4">
                        <input type="text" name="beds" id="form2Example1" class="form-control" placeholder="beds" />
                    </div>
                    <div class="form-outline mb-4 mt-4">
                        <input type="text" name="baths" id="form2Example1" class="form-control" placeholder="baths" />
                    </div>
                    <div class="form-outline mb-4 mt-4">
                        <input type="text" name="sq_ft" id="form2Example1" class="form-control" placeholder="SQ/FT" />
                    </div>
                    <div class="form-outline mb-4 mt-4">
                        <input type="text" name="year_built" id="form2Example1" class="form-control" placeholder="Year Build" />
                    </div>
                    <div class="form-outline mb-4 mt-4">
                        <input type="text" name="price_sqft" id="form2Example1" class="form-control" placeholder="Price Per SQ FT" />
                    </div>
                    <div class="form-outline mb-4 mt-4">
                      <input type="text" name="location" id="form2Example1" class="form-control" placeholder="location" />
                    </div>

                    <select name="home_type" class="form-control form-select" aria-label="Default select example">
                        <option selected>Seleccione tipos</option>
                        <option value="Condo">Condominio</option>
                        <option value="Commercial">Commercial</option>
                        <option value="Land">Terrenos</option>
                    </select>
                    <select name="type" class="form-control mt-3 mb-4 form-select" aria-label="Default select example">
                        <option selected>Seleccione Tipos</option>
                        <option value="Buy">Comprar</option>
                        <option value="Rent">Rentar</option>
                        <option value="Lease">En Aquiler</option>
                    </select>
                    <select name="city" class="form-control mt-3 mb-4 form-select" aria-label="Default select example">
                      <option selected>Select City</option>
                      <option value="New York">Sincelejo</option>
                      <option value="Brooklyn">Barranquilla</option>
                      <option value="London">Cartagena</option>
                      <option value="Tokyo">Monteria</option>
                      <option value="Cairo">Santa Marta</option>
                      <option value="Cairo">Valledupar</option>
                  </select>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Mas Informacion</label>
                        <textarea placeholder="More Info" name="more_info" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-outline mb-4 mt-4">
                        <input type="text" name="agent_name" id="form2Example1" class="form-control" placeholder="agent name" />
                    </div>


                    <!-- Submit button -->
                    <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">create</button>

                </form>

        </div>
      </div>
    </div>
  </div>

 @endsection
