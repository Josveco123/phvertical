<script>
    document.addEventListener("DOMContentLoaded", function() {
        var boton = document.getElementById('home');
        var contenidoOriginal = boton.textContent; // Guarda el contenido original

        // Cambiar el contenido del elemento al cargar la página
        boton.textContent = "INICIO";
        boton.classList.add("text-red-600", "bg-white");

        // Evitar que el enlace recargue la página
        boton.addEventListener("click", function(event) {
            event.preventDefault();
        });
    });
</script>

<div id="pagin1" class="pt-3 w-auto h-auto xl:h-[75vh]  flex flex-col  gap-x-4 pl-5 xl:flex-row">
    <!-- foto portada -->
    <div class="object-cover order-1 mr-5 h-full xl:order-2 w-full  xl:w-8/12 pt-2 xl:pt-10 pr-5">
        <img class="w-full h-full border rounded-3xl shadow-lg shadow-gray-300" src="{{ asset('images/portada.png') }}" alt="" srcset="">
    </div>

    <!-- google maps --->

    <div id='lado1' class="pb-1 h-full w-full mt-1 xl:w-4/12  flex flex-col justify-start items-center text-center order-2 xl:order-1 pr-5">
        <div class="flex flex-col justify-center w-full h-auto">
            <span class="w-auto h-auto flex flex-row justify-center px-2 text-red-600 text-sm md:text-lg">
                Como llegar
            </span>
            <div class="flex flex-row space-x-2 w-full h-full object-fill">
                <a class="flex w-full h-full justify-center items-center text-center border-red-600 "  target="_blank">
                    <img class="rounded-3xl w-full h-full" src="{{ asset('images/local0.png') }}" alt=""
                        srcset="">
                </a>
                <a class="relative flex w-full p-2 h-auto justify-center items-center text-center font-bold text-lg text-red-600/0 text-10 hover:text-red-600/100 hover:border-2 border-red-600 hover:rounded-3xl  hover:bg-red-100" href="https://maps.app.goo.gl/o8d4LRH5MfBD1NS36" target="_blank">
                    <span class="w-auto h-2 z-100 absolute">Ir a google map</span>
                    <img class="rounded-3xl w-full h-full" src="{{ asset('images/local1.png') }}" alt="no hay foto"
                    srcset="">
                </a>
          </div>
        </div>

        <!-- Distribuidores --->
        <div class="flex flex-col w-full h-full mt-4 pt-1 border-2 border-gray-100 shadow-xl shadow-gray-300 rounded-3xl px-3 pb-3">
            <span class="w-full mb-2 h-auto text-lg  text-red-600 flex justify-center ">
                Canal de distribucion
            </span>
            <!--
                logo dist
            --->
            <div class="w-full h-full grid grid-cols-2 gap-x-10 sm:grid-cols-3 lg:grid-cols-4">

                @foreach ($distribuidor as $dist)
                <a class=" flex flex-row justify-center p-1 w-auto h-28 md:h-36 mb-1 lg:h-16 rounded-full bg-gray-0 border-2 border-red-200 border-dotted" href="{{ $dist->web }}"  target="_blank" alt="no hay foto">
                    <img class="object-fill border bg-gray-100 hover:scale-75 lg:hover:scale-100 hover:border-2 rounded-xl border-red-200 hover:rounded-t-full hover:p-1 hover:shadow-inner hover:shadow-red-600" src="imagendist/{{ $dist->imagen }}" alt="{{ $dist['distlogo'] }}">
                </a>
                @endforeach
            </div>
        </div>
    </div>

</div>
