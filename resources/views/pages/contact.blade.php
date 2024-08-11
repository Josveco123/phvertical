@extends('layouts.app')

@section('content')
    <div class="site-blocks-cover inner-page-cover overlay"
        style="background-image: url({{ asset('storage/images/hero_bg_2.jpg') }});" data-aos="fade"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-10">
                    <h1 class="mb-2">Contacta con nosotras</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container ">
            <div class="flex flex-row lg:flex-col justify-between items-stretch">

                <div id="contacto1" class="mb-5 border-2 border-gray-100 w-full h-full mr-10 flex-grow">
                    <h1
                        class="flex flex-row mt-4 font-bold text-black text-xl text-uppercase w-full justify-center items-center">
                        Formulario de contacto</h1>
                    <form action="#" class="p-5 bg-white">
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="font-weight-bold" for="fullname">Nombre Completo</label>
                                <input type="text" id="fullname" class="form-control" placeholder="Nombre Completo">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="email">Email</label>
                                <input type="email" id="email" class="form-control" placeholder="Direccion Email">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="email">Referencia</label>
                                <input type="text" id="subject" class="form-control" placeholder="Referencia">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12 ">
                                <label class="font-weight-bold" for="Mensaje">Mensaje</label>
                                <textarea name="mensaje" id="mensaje" cols="30" rows="8" class="form-control h-20"
                                    placeholder="Diganos..."></textarea>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Enviar Mensaje"
                                    class="btn btn-primary  py-2 px-4 rounded-0">
                            </div>
                        </div>
                    </form>
                </div>

                <div id="contacto2" class="mb-5 w-full h-full flex-grow">
                    <div class="px-4 mb-3 bg-white">
                        <h1
                            class="flex flex-row mt-4 font-bold text-black text-xl text-uppercase w-full justify-center items-center">
                            Phvertical
                        </h1>
                        <div class="p-5 bg-white">
                            <p class="mb-6 flex flex-row text-justify">Tu inmobiliaria de confianza, contáctanos y descubre
                                todas las opciones que tenemos para ti.
                                Estamos abiertos todos los días de 8 a.m. a 6 p.m.
                            </p>
                            <h3 class="h6 text-black mb-3 font-bold">Datos de Contacto</h3>
                            <p class="mb-0 font-weight-bold">Direccion</p>
                            <p class="mb-4">Calle 38 No. 4A 184 L22 Mz C. Sincelejo, Sucre, Colombia</p>
                            <p class="mb-0 font-weight-bold">Telefono</p>
                            <p class="mb-4"><a href="#">+57 3113276630</a></p>
                            <p class="mb-0 font-weight-bold">Direccion Email</p>
                            <p class="mb-0"><a href="#">phvertical79@gmail.com</a></p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>


@endsection
