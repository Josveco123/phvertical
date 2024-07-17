@extends('layouts.app')


@section('content')

<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url({{ asset('assets/images/hero_bg_2.jpg')}});" data-aos="fade">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">
        <div class="col-md-10">
          <h1 class="mb-2">Buscando propiedades</h1>

        </div>
      </div>
    </div>
  </div>



  <div class="site-section site-section-sm bg-light">
    <div class="container">

      <div class="row">
        <div class="col-12">
          <div class="site-section-title mb-5">
            <h2>Buscando propiedades</h2>
          </div>
        </div>
      </div>

      <div class="row mb-5">
        @if ($searches->count() > 0)
            @foreach ($searches as $relatedProp)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="property-entry h-100">
                <a href="{{ route('single.prop', $relatedProp->id) }}" class="property-thumbnail">
                    <div class="offer-type-wrap">
                      <span class="offer-type bg-danger">{{ $relatedProp->type }}</span>
                    </div>
                    <img src="{{ asset('public/assets/images/'.$relatedProp->image.'') }}" alt="Image" class="img-fluid">
                </a>
                <div class="p-4 property-body">
                    <h2 class="property-title"><a href="{{ route('single.prop', $relatedProp->id) }}">{{ $relatedProp->title }}</a></h2>
                    <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> {{ $relatedProp->location }}</span>
                    <strong class="property-price text-primary mb-3 d-block text-success">${{ $relatedProp->price }}</strong>
                    <ul class="property-specs-wrap mb-3 mb-lg-0">
                    <li>
                        <span class="property-specs">Cuartos</span>
                        <span class="property-specs-number">{{ $relatedProp->beds }} <sup>+</sup></span>

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
