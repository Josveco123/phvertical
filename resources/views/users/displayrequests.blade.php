@extends('layouts.app')


@section('content')

<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url({{ asset('assets/images/hero_bg_2.jpg')}});" data-aos="fade">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">
        <div class="col-md-10">
          <h1 class="mb-2">Todas las solicitudes de propiedades</h1>

        </div>
      </div>
    </div>
  </div>



  <div class="site-section site-section-sm bg-light">
    <div class="container">

      <div class="row">
        <div class="col-12">
          <div class="site-section-title mb-5">
            <h2>Todas las solicitudes de propiedades</h2>
          </div>
        </div>
      </div>

      <div class="row mb-5">
        @if ($allRequests->count() > 0)
            @foreach ($allRequests as $relatedProp)
            <div class="col-md-6 col-lg-4">
                <div class="property-entry h-100">
                <a href="{{ route('single.prop', $relatedProp->prop_id) }}" class="btn btn-success">
                   Ir a esta propiedad
                </a>

                </div>
            </div>
            @endforeach
        @else
            <h3 class="alert alert-success">todavía no hay solicitudes</h3>
        @endif




      </div>
    </div>
@endsection
