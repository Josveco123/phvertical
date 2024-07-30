@extends('layouts.adminlogin')

@section('content')
    <div class="grid grid-cols-1 lg:space-x-2 lg:grid-cols-2  pt-5 lg:pt-16 px-20">
        <div class="flex flex-col justify-center items-center w-auto h-full border-2 border-black rounded-3xl bg-red-50 p-2 md:p-1">

            <div class="text-center text-lg p-2 text-red-600 ">¡Bienvenido a <span class="font-bold text-2xl "> Phvertical!</span>
            </div>
            <div class="text-gray-500 w-5/6 text-lg text-justify hidden lg:block p-2 md:flex flex-row lg:flex-row justify-center items-start">
                <span>
                    Nos complace darte la bienvenida a nuestra plataforma en línea, donde encontrarás un mundo de
                    posibilidades para mejorar la calidad de vida. Al validar tu ingreso, has dado el primer paso hacia
                    mejorar tu bienestar y el de los tuyos. <br />
                    En <span class="text-red-400"><span class="text-red-600">Phvertical</span>, somos lideres en propiedad horizontal.</span> Es por eso que disponemos de una
                    amplia gama de soluciones inmobiliarias que podrian satisfacer tanto tus necesidades de vivienda como de negocio.
                    Es por eso que registrandote dispones de herramientas en linea que te permitiran hacer una mejor
                    seleccion de tu necesidad y facilitaran el contacto con nuestros asesores.<br />
                    <span class="text-gray-700">Registrandote dispones de dos herramientas en linea como son:</span><br />
                    <strong>1.</strong> Solicitar en linea informacion de inmuebles a nuestros asesores.<br />
                    <strong>2.</strong> Preseleccionar inmuebles que mejoren las posibilidades de la eleccion final.<br />
                    <span class="text-xs"> Gracias por estar con nosotros.</span>
                </span>
            </div>
        </div>

        <div class="row justify-content-center bg-blue-50 py-5 lg:py-20 border-2 rounded-3xl">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{'Login'}}</div>
                    <div class="card-body">

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

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
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ 'Login' }}
                                    </button>

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
