@extends('layouts.app')

@section('content')
    <div class="slide-one-item home-slider owl-carousel">
        @foreach ($props as $prop)
            <div class="site-blocks-cover overlay"
                style="background-image: url({{ asset('storage/images/' . $prop->image) }});
               background-size: cover;
               background-position: center;
               width: 100%;
               height: auto;"
                data-aos="fade">
                <div class="container">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-md-10">
                            @if ($prop->type == 'Vender')
                                <span
                                    class="d-inline-block bg-danger text-white px-3 mb-3 property-offer-type rounded">{{ $prop->type }}</span>
                            @elseif($prop->type == 'Rentar')
                                <span
                                    class="d-inline-block bg-success text-white px-3 mb-3 property-offer-type rounded">{{ $prop->type }}</span>
                            @else
                                <span
                                    class="d-inline-block bg-warning text-white px-3 mb-3 property-offer-type rounded">{{ $prop->type }}</span>
                            @endif
                            <h1 class="mb-2">{{ $prop->title }}</h1>
                            @if ($prop->type == 'Rentar' || $prop->type == 'Rentar')
                                <p class="mb-5"><strong
                                        class="h2 text-success font-weight-bold">${{ $prop->price }}</strong></p>
                            @else
                                <p class="mb-5"><strong class="h2 text-success font-weight-bold">-----</strong></p>
                            @endif
                            <p><a href="{{ route('single.prop', $prop->id) }}"
                                    class="btn btn-white btn-outline-white py-3 px-5 rounded-0 btn-2">
                                    Ver Detalles
                                </a></p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach


    </div>

    <!-- search input -->
    <div class="site-section site-section-sm pb-0">
        <div class="container">
            <div class="row">
                <form action="{{ route('search.prop') }}" method="POST" class="form-search col-md-12"
                    style="margin-top: -100px;">
                    @csrf
                    <div class="row  align-items-end">
                        <div class="col-md-3">
                            <label for="list-types">Tipos de listados</label>
                            <div class="select-wrap">
                                <span class="icon icon-arrow_drop_down"></span>
                                <select name="list_types" id="list-types" class="form-control d-block rounded-0">
                                    <option value="Condo">Condominio</option>
                                    <option value="Comercial">Comercial</option>
                                    <option value="Terreno">Terrenos</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="offer-types">Otros Tipos</label>
                            <div class="select-wrap">
                                <span class="icon icon-arrow_drop_down"></span>
                                <select name="offer_types" id="offer-types" class="form-control d-block rounded-0">
                                    <option value="Vender">Vender</option>
                                    <option value="Rentar">Rentar</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="select-city">Seleccione Ciudad</label>
                            <div class="select-wrap">
                                <span class="icon icon-arrow_drop_down"></span>
                                <select name="select_city" id="select-city" class="form-control d-block rounded-0">
                                    <option value="Sincelejo">Sincelejo</option>
                                    <option value="Barranquilla">Barranquilla</option>
                                    <option value="Cartagena">Cartagena</option>
                                    <option value="Monteria">Monteria</option>
                                    <option value="Santa Marta">Santa Marta</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <input name="submit" type="submit" class="btn btn-success text-white btn-block rounded-0"
                                value="Search">
                        </div>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="view-options bg-white py-3 px-3 d-md-flex align-items-center">
                        <div class="mr-auto">
                            <a href="{{ route('home') }}" class="icon-view view-module active"><span
                                    class="icon-view_module"></span></a>

                        </div>
                        <div class="ml-auto d-flex align-items-center">
                            <div>
                                <a href="{{ route('home') }}"
                                    class="text-decoration-none  view-list px-3 border-right active">Todas</a>
                                <a href="{{ route('buy.prop') }}"
                                    class="text-decoration-none  view-list px-3 border-right">Vender</a>
                                <a href="{{ route('rent.prop') }}" class="text-decoration-none  view-list px-3">Rentar</a>
                                <a href="{{ route('price.asc.prop') }}" class="text-decoration-none  view-list px-3">Por
                                    Precio Ascendente</a>
                                <a href="{{ route('price.desc.prop') }}" class="text-decoration-none  view-list px-3">Por
                                    precio Desendente</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- props -->
    <div class="site-section site-section-sm bg-light">
        <div class="container">

            <div class="row">
                @foreach ($props as $prop)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="property-entry h-100">
                            <a href="{{ route('single.prop', $prop->id) }}" class="property-thumbnail">
                                <div class="offer-type-wrap">
                                    <span class="offer-type bg-success">{{ $prop->type }}</span>
                                </div>
                                <img src="{{ asset('storage/images/' . $prop->image) }}" alt="Image prop 1"
                                    class="img-fluid w-full h-80">
                            </a>
                            <div class="p-4 property-body">
                                <h2 class="property-title"><a class="text-decoration-none"
                                        href="{{ route('single.prop', $prop->id) }}">{{ $prop->title }}</a></h2>
                                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span>
                                    {{ $prop->location }}</span>

                                @if ($prop->type == 'Rentar' || $prop->type == 'Rentar')
                                    <strong
                                        class="property-price text-primary mb-3 d-block text-success">{{ $prop->price }}</strong>
                                @else
                                    <strong class="property-price text-primary mb-3 d-block text-success">-----</strong>
                                @endif
                                <ul class="property-specs-wrap mb-3 mb-lg-0">
                                    <li>
                                        <span class="property-specs">Cuartos</span>
                                        <span class="property-specs-number">{{ $prop->beds }} <sup>+</sup></span>

                                    </li>
                                    <li>
                                        <span class="property-specs">Baños</span>
                                        <span class="property-specs-number">{{ $prop->baths }}</span>

                                    </li>
                                    <li>
                                        <span class="property-specs">Mts2</span>
                                        <span class="property-specs-number">{{ $prop->sq_ft }}</span>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <div class="pt-4">
        <div class="pt-4 container">
            <div class="row justify-content-center pb-10">
                <div class="col-md-8 text-center">
                    <div class="font-bold text-xl pb-4 uppercase text-black/80">
                        <h2>¿Por qué elegirnos?</h2>
                    </div>
                    <p class="text-justify text-lg lg:text-xl ">Somos <strong>PH Vertical S.A.S.</strong>, una inmobiliaria
                        en crecimiento. Nos
                        apasiona ayudarte a encontrar el lugar perfecto
                        para ti o tu negocio, brindándote un servicio personalizado y cercano. Conocemos a fondo el mercado
                        inmobiliario
                        de Sincelejo y te acompañaremos en cada paso del proceso, desde la búsqueda hasta la firma de la
                        escritura.
                    </p>
                </div>
            </div>

            <div class="row pb-10">
                <div class="col-md-6 col-lg-4">
                    <a href="#" class="service text-center">
                        <span class="icon flaticon-house"></span>
                        <h2 class="service-heading">Detalles de la zona</h2>
                        <p class="mb-3">Nuestras bodegas locales y viviendas están ubicadas en las mejores zonas de la
                            ciudad de Sincelejo.</p>
                        <p><span class="read-more border-2 border-gray-400 p-2 hover:bg-gray-200 rounded-lg">Leer
                                Mas</span></p>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="#" class="service text-center">
                        <span class="icon flaticon-sold"></span>
                        <h2 class="service-heading">Variedad</h2>
                        <p class="mb-3">Contamos con una amplia variedad de inmuebles que cumplen con las expectativas y
                            requerimientos de nuestros clientes.</p>
                        <p><span class="read-more border-2 border-gray-400 p-2 hover:bg-gray-200 rounded-lg">Leer
                                Mas</span></p>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="#" class="service text-center">
                        <span class="icon flaticon-camera"></span>
                        <h2 class="service-heading">Lo que ofrecemos</h2>
                        <p class="mb-3">En <strong>PH Vertical S.A.S.</strong> asesoramos a nuestros clientes encontrando
                            la propiedad adecuada
                            según sus necesidades y presupuestos, ya sea para uso residencial, comercial o industrial..</p>
                        <p><span class="read-more border-2 border-gray-400 p-2 hover:bg-gray-200 rounded-lg">Leer
                                Mas</span></p>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section bg-light">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-7">
                    <div class="site-section-title text-center">
                        <h2>Nuestros Asesores</h2>
                        <p>Nuestro equipo de profesionales altamente capacitados está dedicado a ofrecer un servicio de
                            calidad, basado en la
                            confianza y la transparencia. Conocemos el mercado local a fondo, lo que nos permite asesorar a
                            nuestros clientes de
                            manera efectiva y personalizada.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
                    <div class="flex flex-col justify-center align-items-center  team-member mr-5">
                        <div
                            class="flex justify-center align-items-center p-1  border-2 border-gray-200 bg-gray-150 rounded-full w-3/5 h-64">
                            <img src="{{ asset('storage/images/asesor1.jpeg') }}" alt="Image"
                                class="img-fluid rounded-full w-11/12">
                        </div>
                        <div class="text">

                            <h2
                                class="flex flex-col justify-center align-items-center mb-2 font-weight-light text-black h4 mt-2">
                                Luz Elena </h2>
                            <span class="w-full flex flex-col text-center d-block mb-3 text-white-opacity-05">Agente de
                                bienes Raíces</span>
                            <p class="flex flex-row text-justify">**********
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
                            <img src="{{ asset('storage/images/asesor2.jpg') }}" alt="Image"
                                class="img-fluid rounded-full w-11/12">
                        </div>
                        <div class="text">

                            <h2
                                class="flex flex-col justify-center align-items-center mb-2 font-weight-light text-black h4 mt-2">
                                David Esteban</h2>
                            <span class="w-full flex flex-col text-center d-block mb-3 text-white-opacity-05">Agente de
                                bienes Raíces</span>
                            <p class="flex flex-row text-justify">**********
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
                            <img src="{{ asset('storage/images/asesor3.jpg') }}" alt="Image"
                                class="img-fluid rounded-full w-11/12">
                        </div>
                        <div class="text">

                            <h2
                                class="flex flex-col justify-center align-items-center mb-2 font-weight-light text-black h4 mt-2">
                                Maria Angelica</h2>
                            <span class="w-full flex flex-col text-center d-block mb-3 text-white-opacity-05">Agente de
                                bienes Raíces</span>
                            <p class="flex flex-row text-justify">**********
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
