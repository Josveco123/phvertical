@extends('layouts.app')

@section('content')
    <div class="h-auto">
        <div class="site-blocks-cover inner-page-cover overlay"
            style="background-image: url({{ asset('storage/images/hero_bg_2.jpg') }});" data-aos="fade"
            data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-10">
                        <h1 class="mb-2">Colombia</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full h-auto mt-14 ">
            <div class="flex w-full h-auto">
                <div
                    class="w-full h-200px flex flex-col space-y-20 md:space-y-0 space-x-10 md:flex-row justify-between items-center ">
                    <div class=" col-md-6 w-full h-full  ml-14">
                        <img class="w-full h-full object-cover" src='{{ asset('storage/images/abaut.jpg') }}' alt="Image">
                    </div>
                    <div
                        class="w-full h-full flex flex-col justify-center items-center col-md-5 border-gray-200 border-2 pr-14">
                        <div class="w-full text-4xl font-bold text-black uppercase mt-2 ">
                            <h2 class="w-full h-auto flex flex-row justify-center items-center">Nuestra Compañia</h2>
                        </div>
                        <p class="p-4 w-full h-full flex flex-row text-justify  overflow-auto">Illum
                            repudiandae
                            ratione facere explicabo.
                            Consequatur dolor optio iusto, quos autem voluptate ea?
                            Sunt laudantium fugiat, mollitia voluptate? Modi blanditiis veniam nesciunt architecto odit
                            voluptatum tempore impedit magnam itaque Illum repudiandae ratione facere explicabo. Consequatur
                            dolor optio iusto, quos autem voluptate ea?
                            Sunt laudantium fugiat, mollitia voluptate? Modi blanditiis veniam nesciunt architecto odit
                            voluptatum tempore impedit magnam itaque natusIllum repudiandae ratione facere explicabo.
                            Consequatur dolor optio iusto, quos autem voluptate ea?
                            !</p>
                        <p class="w-full flex flex-row justify-end items-end">
                            <a href="#" class="btn btn-outline-primary rounded-0 py-2 px-5">Leer mas</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full mt-32  mb-10">
            <div class="container">
                <div class="row mb-3 justify-content-center" data-aos="fade-up">
                    <div class="col-md-7">
                        <div class="site-section-title text-center">
                            <h2>Liderazgo</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero magnam officiis ipsa eum
                                pariatur
                                labore fugit amet eaque iure vitae, repellendus laborum in modi reiciendis quis! Optio
                                minima
                                quibusdam, laboriosam.</p>
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
        <!-- seccion de preguntas frecuentes -->
    </div>
@endsection
