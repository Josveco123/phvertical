@extends('layouts.adminlogin')

@section('content')
    <div class="grid grid-cols-1 lg:space-x-2 lg:grid-cols-2  pt-5 lg:pt-16 px-20">
        <div class="flex flex-col justify-center items-center w-auto h-full  rounded-3xl bg-red-50 p-2 md:p-1">

            <div class="text-center text-lg p-2 text-red-600 ">¡Bienvenido a <span class="font-bold text-2xl ">
                    Phvertical!</span>
            </div>
            <div
                class="text-gray-500 w-5/6 text-xs text-justify hidden lg:block p-2 lg:flex flex-row lg:flex-row justify-center items-start">
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
                    <span class="text-gray-700"><i class="bi bi-house-door"></i> Al registrarte dispones de dos herramientas
                        en línea como son: <i class="bi bi-house-door"></i></span><br /><br />
                    <strong>1.</strong> Solicitar en linea información de inmuebles a nuestros asesores.<br />
                    <strong>2.</strong> Preseleccionar inmuebles que faciliten una decisión más facil y eficiente.<br />
                    <span class="text-xs mr-20 ml-20 text-black"> Gracias por elegirnos.</span><i
                        class="bi bi-hand-thumbs-up  text-black"> Adelante</i>
                </span>
            </div>
        </div>

        <div class="row justify-content-center bg-blue-50 py-4 lg:py-20 border-2 rounded-3xl">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header text-lg lg:text-2xl font-bold text-center items-center bg-gray-400 text-white">
                        Cambiar Clave
                    </div>

                    <div class="card-body text-sm lg:text-md">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif


                        <form method="POST" action="{{ route('change.password') }}">
                            @csrf
                            <!---
                                    Nombre

                                    --->
                            <div class="row mb-2 flex flex-col justify-center items-center">
                                <label for="name" class="w-auto col-md-8  text-md-end  bg-gray-300 text-lg">
                                    <span class="font-bold">Nombre del Usuario :</span> {{ Auth::user()->name }}
                                </label>

                            </div>
                            <!---
                                    Nombre del email

                                    --->
                            <div class="row mb-2 flex flex-col justify-center items-center">
                                <label for="name" class="w-auto col-md-8  text-md-end  bg-gray-300  text-lg">
                                    <span class="font-bold">Correo :</span> {{ Auth::user()->email }}
                                </label>

                            </div>
                            <!---
                                    Contraseña actual

                                --->
                            <div class="row mb-2 flex flex-col justify-center items-center">
                                <label for="password" class="col-md-8 text-md-end">Contraseña Actual</label>

                                <div class="col-md-8">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        name="current_password" required autocomplete="new-password" style="height:30px;">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!---
                                    Contraseña nueva

                                --->
                            <div class="row mb-2 flex flex-col justify-center items-center">
                                <label for="password" class="col-md-8 text-md-end">Nueva Clave</label>

                                <div class="col-md-8">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        name="new_password" required autocomplete="new-password" style="height:30px;">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!---
                                    Contraseña confirma

                                --->
                            <div class="row mb-2 flex flex-col justify-center items-center">
                                <label for="password" class="col-md-8 text-md-end">Confirmar clave</label>

                                <div class="col-md-8">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        name="new_password_confirmation" required autocomplete="new-password"
                                        style="height:30px;">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!---
                                     confirmacion password

                                    --->

                            <div class="w-full mb-0 flex flex-row justify-center items-center space-x-20">
                                <div class="w-auto ">
                                    <button type="submit" class="btn btn-primary">
                                        Cambiar
                                    </button>
                                </div>
                                <div class="w-auto ">
                                    <a href="{{route('home')}}" class="btn btn-primary">
                                        Salir
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
