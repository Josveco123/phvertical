@extends('layouts.app')


@section('content')

    <div class="site-blocks-cover inner-page-cover overlay"
        style="background-image: url({{ asset('storage/images/hero_bg_2.jpg') }});" data-aos="fade">
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
                        <h2>Todas las propiedades que han sido solicitadas</h2>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                @if ($allRequests->count() > 0)
                    @foreach ($relations as $relation)
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="property-entry h-100 flex flex-row ">
                                <a href="{{ route('single.prop', $relation['id']) }}" class="w-11/12   btn btn-success overflow-hidden whitespace-nowrap truncate">
                                    <span
                                        class="ml-1 text-xs text-orange-500 w-full">
                                        <span class="ml-1 text-xs text-white">Ir a esta propiedad ==> </span>{{ $relation['title'] }}
                                    </span>
                                </a>
                                <form action="{{ route('sacar.relation.props', $relation['id']) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <div class="p-1">
                                        <button type="submit" class="btn btn-outline-danger btn-sm">x</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h3 class="alert alert-success">todavía no hay solicitudes</h3>
                @endif
            </div>
            <div class="p-1 text-red-600">Use para descartar
                <button type="submit" class="btn btn-outline-danger btn-sm">x</button>
            </div>
        </div>
    @endsection
