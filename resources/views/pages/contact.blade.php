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
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-lg-7 mb-5">



                    <form action="#" class="p-5 bg-white border">

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
                                <textarea name="mensaje" id="mensaje" cols="30" rows="8" class="form-control h-20" placeholder="Diganos..."></textarea>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Enviar Mensage" class="btn btn-primary  py-2 px-4 rounded-0">
                            </div>
                        </div>

                    </form>
                </div>

                <div class="col-lg-5">
                    <div class="p-4 mb-3 bg-white">
                        <h3 class="h6 text-2xl text-black mb-3 text-uppercase font-bold">Phvertical</h3>
                        <p class="mb-4 flex flex-row text-justify">Tu inmobiliaria de confianza, contáctanos y descubre todas las opciones que tenemos para ti.
                            Estamos abiertos todos los días de 8 a.m. a 6 p.m. </p>
                        <h3 class="h6 text-black mb-3 font-bold">Datos de Contacto</h3>
                        <p class="mb-0 font-weight-bold">Direccion</p>
                        <p class="mb-4">Calle 38 No. 4A 184 L22 Mz C. Sincelejo, Sucre, Colombia</p>

                        <p class="mb-0 font-weight-bold">Telefono</p>
                        <p class="mb-4"><a href="#">+5 232 3232 323</a></p>

                        <p class="mb-0 font-weight-bold">Direccion Email</p>
                        <p class="mb-0"><a href="#">phvertical79@gmail.com</a></p>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-light">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-7">
                    <div class="site-section-title text-center">
                        <h2>Nuestros Agentes</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero magnam officiis ipsa eum
                            pariatur
                            labore fugit amet eaque iure vitae, repellendus laborum in modi reiciendis quis! Optio
                            minima
                            quibusdam, laboriosam.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
                    <div class="flex flex-col justify-center align-items-center  team-member mr-5">
                        <div
                            class="flex justify-center align-items-center p-1  border-2 border-gray-200 bg-gray-150 rounded-full w-3/5 h-64">
                            <img src="{{ asset('storage/images/person_1.jpg') }}" alt="Image"
                                class="img-fluid rounded-full w-11/12">
                        </div>
                        <div class="text">

                            <h2
                                class="flex flex-col justify-center align-items-center mb-2 font-weight-light text-black h4 mt-2">
                                Carlos Beltran</h2>
                            <span class="w-full flex flex-col text-center d-block mb-3 text-white-opacity-05">Agente de
                                bienes Raíces</span>
                            <p class="flex flex-row text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit.
                                Modi dolorem totam non quis facere
                                blanditiis praesentium est. Totam atque corporis nisi, veniam non. Tempore cupiditate,
                                vitae
                                minus obcaecati provident beatae!
                            </p>
                            <div class="w-full flex justify-end items-center text-right text-2xl">
                                <a href="#" class="mr-3 text-black p-2"><span class="icon-facebook"></span></a>
                                <a href="#" class="mr-3 text-black p-2"><span class="icon-twitter"></span></a>
                                <a href="#" class="mr-3 text-black p-2"><span class="icon-linkedin"></span></a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
                    <div class="flex flex-col justify-center align-items-center  team-member mr-5">
                        <div
                            class="flex justify-center align-items-center p-1  border-2 border-gray-200 bg-gray-150 rounded-full w-3/5 h-64">
                            <img src="{{ asset('storage/images/person_2.jpg') }}" alt="Image"
                                class="img-fluid rounded-full w-11/12">
                        </div>
                        <div class="text">

                            <h2
                                class="flex flex-col justify-center align-items-center mb-2 font-weight-light text-black h4 mt-2">
                                Carlos Beltran</h2>
                            <span class="w-full flex flex-col text-center d-block mb-3 text-white-opacity-05">Agente de
                                bienes Raíces</span>
                            <p class="flex flex-row text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit.
                                Modi dolorem totam non quis facere
                                blanditiis praesentium est. Totam atque corporis nisi, veniam non. Tempore cupiditate,
                                vitae
                                minus obcaecati provident beatae!
                            </p>
                            <div class="w-full flex justify-end items-center text-right text-2xl">
                                <a href="#" class="mr-3 text-black p-2"><span class="icon-facebook"></span></a>
                                <a href="#" class="mr-3 text-black p-2"><span class="icon-twitter"></span></a>
                                <a href="#" class="mr-3 text-black p-2"><span class="icon-linkedin"></span></a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
                    <div class="flex flex-col justify-center align-items-center  team-member mr-5">

                        <div
                            class="flex justify-center align-items-center p-1  border-2 border-gray-200 bg-gray-150 rounded-full w-3/5 h-64">
                            <img src="{{ asset('storage/images/person_3.jpg') }}" alt="Image"
                                class="img-fluid rounded-full w-11/12">
                        </div>
                        <div class="text">

                            <h2
                                class="flex flex-col justify-center align-items-center mb-2 font-weight-light text-black h4 mt-2">
                                Carlos Beltran</h2>
                            <span class="w-full flex flex-col text-center d-block mb-3 text-white-opacity-05">Agente de
                                bienes Raíces</span>
                            <p class="flex flex-row text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit.
                                Modi dolorem totam non quis facere
                                blanditiis praesentium est. Totam atque corporis nisi, veniam non. Tempore cupiditate,
                                vitae
                                minus obcaecati provident beatae!
                            </p>
                            <div class="w-full flex justify-end items-center text-right text-2xl">
                                <a href="#" class="mr-3 text-black p-2"><span class="icon-facebook"></span></a>
                                <a href="#" class="mr-3 text-black p-2"><span class="icon-twitter"></span></a>
                                <a href="#" class="mr-3 text-black p-2"><span class="icon-linkedin"></span></a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
