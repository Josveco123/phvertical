@extends('layouts.app')


@section('content')

    <div class="site-blocks-cover inner-page-cover overlay w-full h-auto"
        style="background-image: url({{ asset('storage/images/' . $singleProp->image) }});" data-aos="fade">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-10">
                    <span class="d-inline-block text-white px-3 mb-3 property-offer-type rounded">Detalles de la
                        Propiedad</span>
                    <h1 class="mb-2">{{ $singleProp->title }}</h1>

                    @if ($singleProp->type == 'Alquilar' || $singleProp->type == 'Rentar')
                        <p class="mb-5"><strong class="h2 text-success font-weight-bold">{{ $singleProp->price }}</strong></p>
                    @else
                        <p class="mb-5"><strong class="h2 text-success font-weight-bold">-----</strong></p>
                    @endif

                </div>
            </div>
        </div>
    </div>
    <div class="container">

        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{!! \Session::get('success') !!}</p>
            </div>
        @endif
    </div>

    <div class="container">

        @if (\Session::has('save'))
            <div class="alert alert-success">
                <p>{!! \Session::get('save') !!}</p>
            </div>
        @endif
    </div>

    <div class="site-section site-section-sm">
        <div class="container">
            <div class="row justify-center text-center space-x-4">
                <div class="col-lg-7 max-h-full  border-2 border-gray-300 mr-2 pt-4">
                    <div>
                        <div class="slide-one-item home-slider owl-carousel">
                            @if ($propImages->isNotEmpty())

                                @foreach ($propImages as $propImage)
                                    <div class="w-full h-auto">
                                        <img src="{{ asset('storage/images_gallery/' . $propImage->image) }}" alt="Image"
                                            class="img-fluid" style="width: 100%; height: 600px;">
                                    </div>
                                @endforeach

                                @else
                                <img src="{{ asset('storage/images/' . $singleProp->image) }}" alt="Image"
                                  class="img-fluid" style="width: 100%; height: 600px;">
                            @endif
                        </div>
                    </div>
                    <div
                        class="flex flex-col w-full bg-white  border-bottom border-left border-right mt-2 border-2 border-gray-200">
                        <div class="flex flex-row justify-between w-full">
                            <div class="flex flex-row w-full items-center justify-center col-md-6 mt-4">
                                @if ($singleProp->type == 'Alquilar' || $singleProp->type == 'Rentar')
                                    <strong class="text-success h1 mb-3">{{ $singleProp->price }}</strong>
                                @else
                                    <strong class="text-success h1 mb-3">---</strong>
                                @endif


                            </div>
                            <div class="w-full flex flex-row col-md-5 mt-6 justify-end mr-20">
                                <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right space-x-4">
                                    <li>
                                        <span class="property-specs">Cuartos</span>
                                        <span class="property-specs-number">{{ $singleProp->beds }} <sup>+</sup></span>

                                    </li>
                                    <li>
                                        <span class="property-specs">Baños</span>
                                        <span class="property-specs-number">{{ $singleProp->baths }}</span>

                                    </li>
                                    <li>
                                        <span class="property-specs">Mts2</span>
                                        <span class="property-specs-number">{{ $singleProp->sq_ft }}</span>

                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="w-full flex flex-row border-top">
                            <div class="col-md-6 col-lg-4 text-center py-3">
                                <span class="d-inline-block text-black mb-0 caption-text">Home Type</span>
                                <strong class="d-block">{{ $singleProp->home_type }}</strong>
                            </div>
                            <div class="col-md-6 col-lg-4 text-center  py-3">
                                <span class="d-inline-block text-black mb-0 caption-text">Year Built</span>
                                <strong class="d-block">{{ $singleProp->year_built }}</strong>
                            </div>
                            <div class="col-md-6 col-lg-4 text-center py-3">
                                <span class="d-inline-block text-black mb-0 caption-text">Price/Sqft</span>
                                <strong class="d-block">${{ $singleProp->price_sqft }}</strong>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 border-2 border-gray-300">

                    <div class="bg-white widget border rounded mt-4">

                        <h3 class="h4 text-black widget-title ">Agente de Contacto</h3>
                        @if (isset(Auth::user()->id))
                            @if ($validateFormCount > 0)
                                <p class="alert alert-success">Ya envio una solicitud de esta propiedad y la tiene registrada</p>
                            @else
                                <form method="POST" action="{{ route('insert.request', $singleProp->id) }}"
                                    class="form-contact-agent">
                                    @csrf
                                    <div class="form-group">
                                        <input name="prop_id" value="{{ $singleProp->id }}" type="hidden" id="name"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input name="agent_name" value="{{ $singleProp->agent_name }}" type="hidden"
                                            id="name" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Nombre</label>
                                        <input type="text" name="name" id="name" class="form-control">
                                    </div>
                                    @error('name')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email" class="form-control">
                                    </div>
                                    @error('email')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" name="phone" id="phone" class="form-control">
                                    </div>

                                    @error('phone')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror


                                    <div class="form-group">
                                        <input type="submit" name="submit" id="phone" class="btn btn-primary"
                                            value="Enviar mensaje">
                                    </div>
                                </form>
                            @endif
                        @else
                            <p class="alert alert-success">Inicie sesión para enviar una solicitud a esta propiedad</p>
                        @endif
                    </div>

                    <div class="bg-white widget border rounded">

                        <h3 class="h4 text-black widget-title">Guardar esta Propiedad</h3>
                        @if (isset(Auth::user()->id))
                            @if ($validateSavingPropsCount > 0)
                                <input type="submit" name="submit" id="phone" class="btn btn-primary" disabled
                                    value="Ya la tiene registrada">
                            @else
                                <form method="POST" action="{{ route('save.prop', $singleProp->id) }}"
                                    class="form-contact-agent">
                                    @csrf
                                    <div class="form-group">
                                        <input name="prop_id" value="{{ $singleProp->id }}" type="hidden"
                                            id="name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input name="title" value="{{ $singleProp->title }}" type="hidden"
                                            id="name" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" value="{{ $singleProp->image }}" name="image"
                                            id="name" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" value="{{ $singleProp->location }}" name="location"
                                            id="name" class="form-control">
                                    </div>

                                    <div class="form-group">
                                       <input type="hidden" value="{{ $singleProp->price }}" name="price"
                                          id="name" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" value="{{ $singleProp->type }}" name="type"
                                            id="name" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" name="submit" id="phone" class="btn btn-primary"
                                            value="Guardar propiedad">
                                    </div>
                                </form>
                            @endif
                        @else
                            <p class="alert alert-success">inicie sesión para enviar o seleccionar esta propiedad</p>
                        @endif

                    </div>

                    <div class="bg-white widget border rounded">
                        <h3 class="h4 text-black widget-title ml-0 ">Share</h3>
                        <div class="px-3" style="margin-left: -15px;">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('single.prop', $singleProp->id) }}&quote={{ $singleProp->title }}"
                                class="text-decoration-none pt-3 pb-3 pr-3 pl-0"><span class="icon-facebook"></span></a>
                            <a href="https://twitter.com/intent/tweet?text={{ $singleProp->title }}&url={{ route('single.prop', $singleProp->id) }}"
                                class="text-decoration-none pt-3 pb-3 pr-3 pl-0"><span class="icon-twitter"></span></a>
                            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ route('single.prop', $singleProp->id) }}"
                                class="text-decoration-none pt-3 pb-3 pr-3 pl-0"><span class="icon-linkedin"></span></a>
                        </div>
                    </div>

                </div>

                <div class="flex flex-col w-full mt-2 ml-20">
                    <div class="w-full flex flex-row text-start h4 text-black">Mas Informacion</div>
                    <span class="w-full flex flex-row text-justify pr-20">{{ $singleProp->more_info }}
                    </span>
                    <div class="w-full mt-5 mr-20">
                        <h2 class="text-start text-black text-lg mb-3">Galería</h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 mr-20">
                            @foreach ($propImages as $propImage)
                                <a href="#" class="w-full h-60">
                                    <img src="{{ asset('storage/images_gallery/' . $propImage->image) }}" alt="Image"
                                    class="w-full h-full">
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="site-section site-section-sm bg-light">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="site-section-title mb-5">
                        <h2>Propiedades relacionadas</h2>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                @if ($relatedProps->count() > 0)
                    @foreach ($relatedProps as $relatedProp)
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="property-entry h-100">
                                <a href="{{ route('single.prop', $relatedProp->id) }}" class="property-thumbnail">
                                    <div class="offer-type-wrap">
                                        <span class="offer-type bg-success">Rentar</span>
                                    </div>
                                    <img src="{{ asset('storage/images/' . $relatedProp->image) }}" alt="Image"
                                        class="img-fluid h-80">
                                </a>
                                <div class="p-4 property-body">
                                    <h2 class="property-title"><a class="text-decoration-none"
                                            href="{{ route('single.prop', $relatedProp->id) }}">{{ $relatedProp->title }}</a>
                                    </h2>
                                    <span class="property-location d-block mb-3"><span
                                            class="property-icon icon-room"></span> {{ $relatedProp->location }}</span>
                                        @if ($relatedProp->type == 'Alquilar' || $relatedProp->type == 'Rentar')
                                            <strong class="property-price text-primary mb-3 d-block text-success">{{ $relatedProp->price }}</strong>
                                        @else
                                            <strong class="property-price text-primary mb-3 d-block text-success">----</strong>
                                        @endif

                                    <ul class="property-specs-wrap mb-3 mb-lg-0">
                                        <li>
                                            <span class="property-specs">Cuartos</span>
                                            <span class="property-specs-number">{{ $relatedProp->beds }}
                                                <sup>+</sup></span>

                                        </li>
                                        <li>
                                            <span class="property-specs">Baños</span>
                                            <span class="property-specs-number">{{ $relatedProp->baths }}</span>

                                        </li>
                                        <li>
                                            <span class="property-specs">Mts2</span>
                                            <span class="property-specs-number">{{ $relatedProp->sq_ft }}</span>

                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h3 class="alert alert-success">No hay este tipo de propiedad en el momento</h3>
                @endif
            </div>
        </div>
    @endsection
