@extends('layouts.app')


@section('content')

    <div class="site-blocks-cover inner-page-cover overlay"
        style="background-image: url({{ asset('storage/images/hero_bg_2.jpg') }});" data-aos="fade">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-10">
                    <h1 class="mb-2">Todas las propiedades guardadas</h1>

                </div>
            </div>
        </div>
    </div>



    <div class="site-section site-section-sm bg-light">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="site-section-title mb-5">
                        <h2>Todas las propiedades marcadas con posibilidad</h2>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                @if ($allSavedProps->count() > 0)
                    @foreach ($allSavedProps as $relatedProp)
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="property-entry h-100">
                                <a href="{{ route('single.prop', $relatedProp->prop_id) }}" class="property-thumbnail ">
                                    <img src="{{ asset('storage/images/'.$relatedProp->image) }}" alt="Image 1"
                                        class="img-fluid h-80">
                                </a>
                                <div class="p-4 property-body">
                                    <h2 class="property-title"><a
                                            href="{{ route('single.prop', $relatedProp->prop_id) }}">{{ $relatedProp->title }}</a>
                                    </h2>
                                    <span class="property-location d-block mb-3"><span
                                            class="property-icon icon-room"></span> {{ $relatedProp->location }}</span>
                                    <strong
                                        class="property-price text-primary mb-3 d-block text-success">${{ $relatedProp->price }}</strong>
                                </div>
                                <div class="mb-4 mr-10 text-right h-full">
                                    <form action="{{ route('sacar.props', $relatedProp->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <div class="p-1">
                                            <button type="submit" class="btn btn-outline-danger btn-sm">x</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h3 class="alert alert-success">todavía hay propiedades guardadas</h3>
                @endif
            </div>
            <div class="p-1 text-red-600">Use para descartar
                <button type="submit" class="btn btn-outline-danger btn-sm">x</button>
            </div>
        </div>
    @endsection
