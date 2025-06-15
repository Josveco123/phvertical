@extends('layouts.app')

@section('content')
<div class="min-h-screen w-full bg-gray-50  py-12 flex flex-col">
    <div class="w-full max-w-4xl bg-white shadow-xl rounded-2xl overflow-hidden flex flex-row items-center justify-center">
        <div class="bg-white aspect-video border border-2 border-black-100 mr-5">
            <video controls class="top-0 left-0 h-full object-contain">
                <source src="{{ asset('public/storage/video/' . $video->nombre) }}" type="video/mp4">
                Tu navegador no soporta reproducción de video.
            </video>
        </div>

        <div class="p-6 text-center border border-2 border-black-100">
            <h1 class="w-full text-2xl font-bold mb-4 border border-1 border-red-500">Propiedad</h1>
            <h2 class="w-full text-2xl font-bold mb-4 text-red-800 border px-3 border-1 border-red-500 ">{{$title}}</h2>
            <a href="{{ url()->previous() }}" class="inline-block mt-4 bg-gray-200 text-red-600 text-bold px-6 py-2 rounded-lg hover:bg-gray-100 hover:border-3 transition border border-1 border-green ">
                ← Volver 
            </a>
        </div>
    </div>
</div>
@endsection
