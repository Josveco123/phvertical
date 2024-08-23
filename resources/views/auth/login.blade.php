@extends('layouts.adminlogin')

@section('content')
    <div class="grid grid-cols-1 lg:grid-cols-2  pt-5 lg:pt-16 px-20">
        <div class="flex flex-col justify-center items-center w-auto h-full  rounded-3xl bg-red-50 p-1 lg:p-2">

            <div class="text-center text-lg p-2 text-red-600 ">¡Bienvenido a <span class="font-bold text-2xl ">
                    Phvertical!</span>
            </div>
            <div
                class="text-gray-500 w-5/6 text-xs text-justify hidden lg:block p-1 lg:p-2 lg:flex flex-row lg:flex-row justify-center items-start">
                <span>
                    Nos complace darte la bienvenida a nuestra plataforma en línea, donde encontrarás un mundo de
                    posibilidades. Al validar tu ingreso, has dado el primer paso hacia
                    mejorar tu bienestar y el de los tuyos. <br />
                    En <span class="text-red-400"><span class="text-red-600">Phvertical</span>, somos líderes en propiedad
                        horizontal.</span> Es por eso que disponemos de una
                    amplia gama de soluciones inmobiliarias que podrían satisfacer tanto tus necesidades de vivienda como de
                    negocio.
                    Registrándote dispones de herramientas en línea que te permitirán hacer una mejor
                    selección de tu necesidad y facilitara el contacto con nuestros asesores.<br /><br />
                    <span class="text-gray-700"><i class="bi bi-house-door"></i> Registrandote dispones de dos herramientas en
                        línea como son: <i class="bi bi-house-door"></i></span><br /><br />
                    <strong>1.</strong> Solicitar en linea información de inmuebles a nuestros asesores.<br />
                    <strong>2.</strong> Preseleccionar inmuebles que faciliten una decisión más facil y eficiente.<br />
                    <span class="text-xs mr-20 ml-20 text-black"> Gracias por elegirnos.</span><i
                        class="bi bi-hand-thumbs-up  text-black"> Adelante</i>
                </span>
            </div>
        </div>

        <div class="row justify-content-center bg-blue-50 py-5 lg:py-20 border-2 rounded-3xl">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header bg-gray-400 text-white text-2xl font-bold text-center items-center">Validarse
                    </div>
                    <div class="card-body text-sm lg:text-lg">

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3 flex flex-col justify-center items-center">
                                <label for="email" class="col-md-8 col-form-label text-md-end">Correo electrónico</label>

                                <div class="col-md-8 text-sm">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus
                                        oninput="this.value = this.value.toLowerCase();" style="height: 30px;">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 flex flex-col justify-center items-center">
                                <label for="password" class="col-md-8 col-form-label text-md-end">Clave</label>

                                <div class="col-md-8">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" style="height: 30px;">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            Guardar clave
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="w-full mb-0 flex flex-col lg:flex-row justify-center items-center lg:space-x-10">
                                    <div class="w-auto border-2">
                                        <button type="submit" class="btn btn-primary">
                                            Enviar
                                        </button>
                                    </div>
                                    <div class="w-auto ">
                                        <a href="{{ route('home') }}" class="btn btn-primary">
                                            Salir
                                        </a>
                                    </div>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            <P>Olvido la clave?</P>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
