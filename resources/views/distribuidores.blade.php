@extends('layouts.layouts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var boton = document.getElementById('distribuidores');
        var contenidoOriginal = boton.textContent; // Guarda el contenido original

        // Cambiar el contenido del elemento al cargar la página
        boton.textContent = "DISTRIBUIDORES";
        boton.classList.add("text-red-600");

        // Evitar que el enlace recargue la página
        boton.addEventListener("click", function(event) {
            event.preventDefault();
        });
    });
</script>
<!-- cuerpo principal del distribuidores -->
@section('content')
    <div class="w-full h-auto pt-5">
        <p class="w-full flex flex-row text-center justify-center text-xk md:text-4xl font-titulo1 text-red-600 ">
            DISTRIBUIDORES
        </p>
        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-x-20 gap-y-16 mb-20 mt-10 pl-10 pr-10">
            @foreach ($distribuidores as $distribuidor)
                <div class="pl-10 pr-10 pt-5 w-full h-auto border-2 border-red-100 border-inherit shadow-2xl  flex flex-col  items-center"
                    style="border-radius: 3vw;">
                    <div class="h-56 w-auto">
                        <img class="mx-auto block  h-full w-auto" src="imagendist/{{ $distribuidor->imagen }}"
                            alt={{ 'imagendist/'.$distribuidor->imagen }} srcset="">
                    </div>
                    <div class="flex flex-col justify-center justify-items-center text-md lg:text-sm xl:text-[.8vw] font-delgada1 border-0 rounded-2xl  bg-gray-100">
                        <div class="text-center text-lg font-titulo2 text-gray-500"> {{ $distribuidor->nombre }}</div>
                        <div><span class="font-bold mr-1  text-red-600">E-mail :</span> {{ $distribuidor->email }}</div>
                        <div><span class="font-bold  mr-1 text-red-600">Direccion :</span> {{ $distribuidor->direccion }}                 </div>
                        <div><span class="font-bold  mr-1 text-red-600">Teléfono :</span> {{ $distribuidor->telefono }}
                        </div>
                        <div><span class="font-bold  mr-1 text-red-600 mb-3">Ciudad :</span> {{ $distribuidor->ciudad }}</div>
                    </div>
                    <div class="w-54  bg-gray-400 text-white rounded-xl px-2 hover:bg-white hover:text-black hover:border-2 hober:border-black mb-7 mt-3">
                        <a href="{{ $distribuidor->web }}" target="_blank" rel="noopener noreferrer">
                            <span class="font-bold text-lg px-3 ">Visitar web
                            </span>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @include('layouts.footer')
@endsection
