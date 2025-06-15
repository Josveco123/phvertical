@extends('layouts.layouts')

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var boton = document.getElementById('nosotros');
        var contenidoOriginal = boton.textContent; // Guarda el contenido original

        // Cambiar el contenido del elemento al cargar la página
        boton.textContent = "NOSOTROS";
        boton.classList.add("text-red-600");

        // Evitar que el enlace recargue la página
        boton.addEventListener("click", function(event) {
            event.preventDefault();
        });
    });
</script>


<!-- se inserta cuerpo del trabajo -->
@section('content')
    <div class="w-full h-auto flex flex-col gap-y-1 p-5">
        <div class="w-full flex justify-center text-md md:text-4xl  text-red-600 font-titulo1">
            <span class="lg:ml-[25vw]">ACERCA</span>
            <span class="mx-2 lg:mx-6">DE</span>
            <span>NOSOTROS</span>
        </div>
        <!-- Estas son las lineas rojas -->
        @include('layouts.lineasrojas')
        <!-- Estas son las lineas rojas -->

        <div class="w-full flex flex-grow gap-x-0 ">
            <div class="w-[25vw] max-h-full ml-5 lg:ml-14 rounded-r-full pr-4 bg-red-600 hidden lg:block ">
                <img class="w-[25vw] h-full rounded-r-full" src="{{ asset('images/nos_resena.jpg') }}" alt=""
                    srcset="">
            </div>
            <p class="px-7 w-full lg:mr-10 flex flex-col justify-center  md:text-xl  lg:ml-[3vw] pb-3 text-justify">
                <span class="font-bold text-red-600 md:text-2xl lg:text-3xl lg:text-center mb-2">
                    Reseña Historica
                </span>
                <span class="leading-normal">
                    Laboratorio del caribe S.A.S. inició labores en Sincelejo el 20 de marzo de 1984. Se obtiene el primer
                    Registro Sanitario para el producto comercializado bajo la marca Artrixin iniciándose la expansión y
                    posicionamiento en todo el territorio Nacional.
                    <br />
                    A través de los años Laboratorio del Caribe S.A.S. ha crecido de manera importante en el mercado
                    Nacional,
                    manteniendo una posición de liderazgo y prestigio ante el cuerpo médico por la calidad de sus productos.
                </span>
            </p>
        </div>

        <!-- Estas son las lineas rojas -->
        @include('layouts.lineasrojas')
        <div class="w-full flex flex-grow gap-x-0 ">

            <div class="w-[25vw] max-h-full ml-14  rounded-r-full pr-4 bg-red-600  hidden lg:block">
                <img class="w-[26vw] h-full bg-white rounded-r-full " src="{{ asset('images/nos_politica_calidad.jpg') }}"
                    alt="" srcset="">
            </div>

            <p class="px-7 w-full lg:mr-10 flex flex-col justify-center  md:text-xl lg:ml-[3vw]  pb-5 text-justify">
                <span class="font-bold text-red-600 md:text-2xl lg:text-3xl lg:text-center">
                    Politícas de la calidad</span>
                <span class="leading-normal">
                    Laboratorio del Caribe S.A.S., es una empresa farmacéutica que está en un mejoramiento continuo,
                    ofreciendo
                    productos y servicios confiables que cumplan con las normas de Buenas Prácticas de Manufactura, para
                    contribuir de esta forma al bienestar de la Sociedad.
                    <br />
                    Con ética y responsabilidad ofrecemos al mercado productos de excelente calidad, seguros y efectivos,
                    que
                    satisfacen las necesidades del cliente, cumpliendo con normas Nacionales e Internacionales, y respetando
                    el
                    medio ambiente.
                    <br />
                    A través de la gestión adecuada de los recursos y el compromiso asumido por nuestros colaboradores,
                    Laboratorio del Caribe S.A.S., genera el nivel de rentabilidad acorde a las expectativas de los socios,
                    permitiendo el desarrollo integral de los miembros de nuestra organización.
                </span>
            </p>
        </div>

        <!-- Estas son las lineas rojas -->
        @include('layouts.lineasrojas')

        <div class="w-full flex flex-grow gap-x-0">
            <div class="w-[25vw] max-h-full ml-14  rounded-r-full pr-4 bg-red-600  hidden lg:block">
                <img class="w-full h-full  rounded-r-full" src="{{ asset('images/nos_mision.jpg') }}" alt=""
                    srcset="">
            </div>
            <p class="px-7 w-full lg:mr-10 flex flex-col justify-center  md:text-xl  lg:ml-[3vw]  pb-5 text-justify">
                <span class="font-bold text-red-600 md:text-2xl lg:text-3xl lg:text-center">
                    Mision</span>
                <span class="leading-normal">
                    Laboratorio del Caribe S.A.S., es una empresa farmacéutica que tiene como misión, comercializar
                    productos de
                    excelente calidad, cumpliendo con todas las Normas exigidas por las entidades que nos vigilan,
                    respetando el
                    medio ambiente y generando de esta forma bienestar a la comunidad.
                    <br />
                    Laboratorio del Caribe S.A.S. propenderá por el desarrollo integral de sus colaboradores al mismo tiempo
                    que
                    satisface las expectativas de sus socios.
                </span>
            </p>
        </div>
        <!-- Estas son las lineas rojas -->
        @include('layouts.lineasrojas')
        <div class="w-full flex flex-grow gap-x-0">
            <div class="w-[25vw] max-h-full ml-14  rounded-r-full pr-4 bg-red-600  hidden lg:block">
                <img class="w-full h-full  rounded-r-full" src="{{ asset('images/nos_vision.jpg') }}" alt=""
                    srcset="">
            </div>
            <p class="px-7 w-full lg:mr-10 flex flex-col justify-center  md:text-xl lg:ml-[3vw]  pb-5 text-justify">
                <span class="font-bold text-red-600 md:text-2xl lg:text-3xl lg:text-center">
                    Vision</span>
                <span class="leading-normal">
                    Laboratorios del Caribe S.A.S. va a ser uno de los más reconocidos Laboratorios farmacéuticos de
                    Colombia,
                    ampliando su línea de productos, para hacer una contribución a la sociedad, a través de sus productos,
                    construyendo herramientas para ser más competitivos y posicionarse como uno de los principales
                    laboratorios
                    farmacéuticos en las regiones donde hace presencia.
                </span>
            </p>
        </div>

        <!-- Estas son las lineas rojas -->
        @include('layouts.lineasrojas')
        <div class="w-full flex flex-grow gap-x-0">
            <div class="w-[25vw] max-h-full ml-14  rounded-r-full pr-4 bg-red-600  hidden lg:block">
                <img class="w-full h-full  rounded-r-full" src="{{ asset('images/nos_valores_corporativos.jpg') }}"
                    alt="" srcset="">
            </div>
            <div class="px-7 w-full lg:mr-10 flex flex-col justify-center  md:text-lg lg:ml-[3vw]  pb-3 text-justify">
                <p class="font-bold text-red-600 md:text-2xl lg:text-3xl lg:text-center mb-2">
                    Valores corporativos
                </p>
                <span class="flex flex-row mb-2">
                    <strong class="mr-2">Respeto:</strong>Aceptamos las decisiones y acciones de los clientes internos y
                    externos siendo tolerantes.
                </span>
                <span class="flex flex-row mb-2">
                    <strong class="mr-2"> Compromiso:</strong> Damos lo máximo de cada uno de nosotros con sentido de
                    pertenencia hacia la empresa.
                </span>
                <span class="flex flex-row mb-2">
                    <strong class="mr-2">Honestidad:</strong> Actuamos conforme a los intereses comunes y no particulares
                    de
                    acuerdo a la ley y las costumbres.
                </span>
                <span class="flex flex-row mb-2">
                    <strong class="mr-2">Lealtad:</strong> Somos fieles frente a los compromisos y objetivos de la
                    empresa.
                </span>
                <span class="flex flex-row mb-2">
                    <strong class="mr-2">Responsabilidad: </strong> Somos conscientes de nuestras actuaciones, cumpliendo
                    cabalmente de forma que se logren los objetivos de la empresa.
                </span>
            </div>
        </div>
        <!-- Estas son las lineas rojas -->
        @include('layouts.lineasrojas')
    </div>
    @include('layouts.footer')
@endsection
