@extends('layouts.adminlogin')

@section('content')
    <div class="grid grid-cols-1 lg:space-x-2 lg:grid-cols-2  pt-5 lg:pt-16 px-20">
        <div class="flex flex-col justify-center items-center w-auto h-full  rounded-3xl bg-red-50 p-2 md:p-1">

            <div class="text-center text-lg p-2 text-red-600 ">¡Bienvenido a <span class="font-bold text-2xl "> Phvertical!</span>
            </div>
            <div class="text-gray-500 w-5/6 text-xs text-justify hidden lg:block p-2 lg:flex flex-row lg:flex-row justify-center items-start">
                <span>
                    Nos complace darte la bienvenida a nuestra plataforma en línea, donde encontrarás un mundo de
                    posibilidades. Al validar tu ingreso, has dado el primer paso hacia
                    mejorar tu bienestar y el de los tuyos. <br />
                    En <span class="text-red-400"><span class="text-red-600">Phvertical</span>, somos líderes en propiedad horizontal.</span> Es por eso que disponemos de una
                    amplia gama de soluciones inmobiliarias que podrían satisfacer tanto tus necesidades de vivienda como de negocio.
                     Registrándote dispones de herramientas en línea que te permitirán hacer una mejor
                    selección de tu necesidad y facilitara el contacto con nuestros asesores.<br /><br />
                    <span class="text-gray-700"><i class="bi bi-house-door"></i> Al registrarte dispones de dos herramientas en línea como son: <i class="bi bi-house-door"></i></span><br /><br />
                    <strong>1.</strong> Solicitar en linea información de inmuebles a nuestros asesores.<br />
                    <strong>2.</strong> Preseleccionar inmuebles que faciliten una decisión más facil y eficiente.<br />
                    <span class="text-xs mr-20 ml-20 text-black"> Gracias por elegirnos.</span><i class="bi bi-hand-thumbs-up  text-black">  Adelante</i>
                </span>
            </div>
        </div>

        <div class="row justify-content-center bg-blue-50 py-4 lg:py-20 border-2 rounded-3xl">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header text-lg lg:text-2xl font-bold text-center items-center bg-gray-400 text-white">
                        Registrarse
                    </div>

                    <div class="card-body text-sm lg:text-md">
                        
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <!---
                                Nombre

                                --->
                            <div class="row mb-2 flex flex-col justify-center items-center">
                                <label for="name" class="col-md-8  text-md-end">
                                    Nombre
                                </label>

                                <div class="col-md-8">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus style="height:30px;">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!---
                                Nombre del email

                                --->
                            <div class="row mb-2 flex flex-col justify-center items-center">
                                <label for="email" class="col-md-8 text-md-end">Correo Electronico</label>

                                <div class="col-md-8">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  style="height:30px;" oninput="this.value = this.value.toLowerCase();">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!---
                                Nombre del password

                                --->
                            <div class="row mb-2 flex flex-col justify-center items-center">
                                <label for="password" class="col-md-8 text-md-end">Clave</label>

                                <div class="col-md-8">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"  style="height:30px;">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!---
                                Nombre del confirmacion password

                                --->
                            <div class="row mb-2 flex flex-col justify-center items-center">
                                <label for="password-confirm" class="col-md-8 text-md-end">Confirmar Clave</label>

                                <div class="col-md-8">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"  style="height:30px;">
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Registrarse
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
