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

        <div class="w-full h-auto py-10 lg:px-10 mt-20">
            <div class="grid grid-cols-1 gap-y-5 w-full justify-center items-center h-auto">
                <div class="h-auto grid grid-cols-1 lg:grid-cols-2 gap-20 gap-y-0  lg:gap-y-20">
                    <div class="h-auto ml-0 mr-0 lg:ml-14">
                        <img class="w-full h-[400px]  rounded-lg" src="{{ asset('storage/images/nosotros.jpg') }}"
                            alt="Image">
                    </div>

                    <div
                        class="w-full h-auto flex flex-col justify-center items-center col-md-5 border-gray-100 border-2 px-5 lg:pl-10 ml-0 lg:ml-0 bg-gray-50 ">
                        <div class="flex flex-row items-center w-full  font-bold text-black uppercase mt-2">
                            <h2
                                class="w-full h-auto flex flex-row justify-center items-center mt-4 mb-6 text-lg lg:text-2xl">
                                Nuestra Compañia</h2>
                        </div>
                        <p class="h-full text-justify text-md lg:text-xl">
                            <span class="font-bold">PH VERTICAL S.A.S</span> se destaca por su amplia experiencia en el
                            sector y su compromiso con la satisfacción del cliente.
                            Con una amplia trayectoria, hemos ayudado a innumerables empresas y familias a encontrar el
                            espacio perfecto que se ajuste a sus necesidades.
                        </p>
                        <p class="w-full flex flex-row justify-end items-end">
                            <a href="#" class="btn btn-outline-secondary rounded-0 p-1 text-sm lg:text-lg">Leer
                                mas</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full h-auto lg:p-10">
            <div class="my-5 mx-0 lg:mx-5">
                <div class="grid grid-cols-1 gap-y-5 lg:gap-20 lg:grid-cols-2">
                    <div class="bg-gray-50 p-4">
                        <div class="w-full">
                            <h2 class="w-full text-md lg:text-2xl  font-bold text-center text-black uppercase">Misión</h2>
                            <p class="px-3 py-2 w-full text-sm lg:text-lg font-bold text-justify">
                                Nuestra misión es proporcionar soluciones inmobiliarias integrales que superen las
                                expectativas de nuestros clientes, contribuyendo al desarrollo y bienestar de la comunidad
                                de Sincelejo.
                            </p>
                        </div>
                    </div>
                    <div class="bg-gray-50 p-4">
                        <div class="w-full">
                            <h2 class="w-full text-md lg:text-2xl  font-bold text-center text-black uppercase">Visión</h2>
                            <p class="px-3 py-2 w-full text-sm lg:text-lg  font-bold text-justify">
                                En <strong>PH VERTICAL S.A.S.</strong> , aspiramos a ser la inmobiliaria líder en Sincelejo, reconocida por
                                nuestra excelencia en el servicio y nuestra capacidad para satisfacer las necesidades de
                                nuestros clientes.
                            </p>
                        </div>
                    </div>
                    <div class="bg-gray-50 p-4">
                        <div class="w-full">
                            <h2 class="w-full text-md lg:text-2xl  font-bold text-center text-black uppercase">Nuestro compromiso</h2>
                            <div class="px-3 py-2 w-full text-sm lg:text-lg  font-bold text-justify">
                                <h1 class="font-bold mb-2">Nos comprometemos a:</h1>
                                <ul class="list-none">
                                    <li class="flex items-start">
                                        <span class="text-gray-400 mr-2">✔</span>
                                        Innovar continuamente en nuestros servicios y procesos para ofrecer soluciones
                                        inmobiliarias modernas y eficientes.
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-gray-500 mr-2">✔</span>
                                        Fomentar relaciones duraderas con nuestros clientes, basadas en la confianza, la
                                        transparencia y la satisfacción mutua.
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-gray-500 mr-2">✔</span>
                                        Contribuir al desarrollo sostenible de la comunidad de Sincelejo, promoviendo
                                        prácticas inmobiliarias respon- sables y éticas.
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-gray-500 mr-2">✔</span>
                                        Capacitar y empoderar a nuestro equipo de profesionales para que brinden un servicio
                                        excepcional y personalizado.
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-gray-500 mr-2">✔</span>
                                        Expandir nuestra presencia en el mercado local y regional, consolidándonos como la
                                        opción preferida para la compra, venta y alquiler de propiedades.
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="bg-gray-50 p-4">
                        <div class="w-full">
                            <h2 class="w-full text-md lg:text-2xl  font-bold text-center text-black uppercase">Servicios</h2>
                            <div class="px-3 py-2 w-full text-sm lg:text-lg  font-bold text-justify">
                                <ul class="list-none">
                                    <li class="flex items-start">
                                        <span class="text-gray-400 mr-2">✔</span>
                                        Venta y alquiler de propiedades residenciales y comer- ciales.
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-gray-500 mr-2">✔</span>
                                        Asesoría en inversiones inmobiliarias.
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-gray-500 mr-2">✔</span>
                                        Gestión de propiedades.
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-gray-500 mr-2">✔</span>
                                        Avalúos y estudios de mercado.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
