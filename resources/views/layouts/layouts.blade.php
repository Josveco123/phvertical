<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href='images/favicon.png'>
    @vite('resources/css/app.css')
    <title>Laboratoriodelcaribe</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.8.335/pdf.min.js"></script>
</head>

<body class="bg-red-50/10">

    <div class="flex flex-col">
        <nav class="border-0 w-full max-h-32 bg-gray-100 border-gray-400  dark:bg-gray-400 sticky top-0 z-[500]">

            <!-- parte correspondiente a la linea de publicidad -->

            <div class="flex items-center w-full h-8 bg-gray-50 border-2 border-white">
                <span
                    class="hidden text-red-900 mr-20 font-serif flex-grow text-right lg:text-lg xl:text-xl truncate  md:inline ">Fabricamos
                    y comercializamos medicamentos para el consumo humano
                </span>
                <div class="flex items-center gap-2 mr-20 ml-auto">
                    <a href="https://www.facebook.com/labdelcaribesa" target="_blank">
                        <img class="w-auto h-8" src="images/facebook.svg" alt="Facebook">
                    </a>
                    <a href="https://www.instagram.com/laboratoriodelcaribesas/embed" target="_blank">
                        <img class="w-auto h-8" src="images/instagram.svg" alt="Instagram">
                    </a>
                    <a href="https://www.tiktok.com/@labodelcaribes.a.s" target="_blank">
                        <img class="w-auto h-8" src="images/tiktok.png" alt="TikTok">
                    </a>
                    <a href="https://api.whatsapp.com/send?text=Buen%20día%20quisiera%20consultar%20sobre%20&amp;phone=573135120781"
                        target="_blank" title="Chatea con Nosotros">
                        <img class="w-auto h-8" src="images/whatsapp.svg" alt="WhatsApp">
                    </a>
                </div>
            </div>

            <!-- comienza el navbar como tal -->

            <div id="logo"
                class="w-full h-24  md:w-[95vw] flex flex-wrap items-center justify-between mx-auto pl-4 lg:pl-10 pr-3 mb-5">
                <a href="{{ route('welcome') }}" class="h-20 sm:h-20 md:h-24 py-4 px-2 w-auto flex items-center mr-3">
                    <img src="{{ asset('images/logo.png') }}" class=" max-h-full w-auto" alt="Logo">
                </a>
                <!--
                    bottom hamburguesa
                -->
                <div id="menulinea">
                    <div id="registrar"
                        class="flex justify-center items-center lg:hidden mr-3 order-3 space-x-3 lg:order-4 lg:space-x-0 ">
                        <a id="mnu-user-vertical" type="button"
                            class="flex  items-center p-2  w-10  sm:w-12  md:w-14 lg:w-16 h-auto justify-center text-sm text-gray-500 rounded-lg hover:bg-gray-100">
                            <img class="w-full h-auto" src="{{ asset('images/menuLinea.png') }}" alt=""
                                srcset="">
                        </a>
                    </div>

                    <div id="mnu-user"
                        class="w-24 text-xs ml-[-30px] md:ml-[-15px] sm:w-28 md:w-32 lg:w-auto h-auto  hidden lg:flex bg-gray-100 border-rbl-4 border-white rounded-xl justify-start lg:bg-gray-100 absolute z-100 lg:left-0 lg:static lg:top-0  items-center lg:justify-center ">
                        <ul
                            class="pb-2 w-full lg:w-auto h-auto flex flex-col  list-none justify-start items-start font-normal sm:text-sm md:text-normal lg:text-sm  rounded-lg space-y-2 lg:space-x-6 lg:flex-row ">
                            <li class="w-full lg:w-auto hover:bg-gray-300 rounded-xl mt-0 lg:mt-2">
                                <a id="home" href="{{ route('welcome') }}"
                                    class="w-full px-2 bg-gray-100  text-gray-900  hover:text-red-600 hover:scale-105  hover:bg-gray-200 rounded-lg">
                                    Inicio</a>
                            </li>
                            <li class="w-full lg:w-auto hover:bg-gray-300 rounded-xl">
                                <a id="nosotros" href="{{ route('nosotros') }}"
                                    class="w-full px-2 text-gray-900  hover:text-red-600 hover:scale-105  hover:bg-gray-200 rounded-lg">
                                    Nosotros</a>
                            </li>
                            <li class="w-full lg:w-auto hover:bg-gray-300 rounded-xl">
                                <a id="portafolio" href="{{ route('productos2') }}"
                                    class="w-full px-2 text-gray-900  hover:text-red-600 hover:scale-105  hover:bg-gray-200 rounded-lg">
                                    Portafolio</a>
                            </li>
                            <li class="w-full lg:w-auto hover:bg-gray-300 rounded-xl">
                                <a id="distribuidores" href="{{ route('distribuidor2') }}"
                                    class="w-full px-2 text-gray-900  hover:text-red-600 hover:scale-105  hover:bg-gray-200 rounded-lg">
                                    Distribuidores</a>
                            </li>
                            <li class="w-full lg:w-auto hover:bg-gray-300 rounded-xl">
                                <a id="contacto" href="{{ route('contactos') }}"
                                    class="w-full px-2 text-gray-900  hover:text-red-600 hover:scale-105  hover:bg-gray-200 rounded-lg">
                                    Contacto</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div id="crud" class="flex flex-row justify-center items-center">
                    @if (Auth::check())
                        @hasrole('admin|master')
                            <div
                                class="hidden lg:flex w-auto h-auto  px-2 mr-2 flex-row relative justify-center items-center bg-gray-100 text-xs text-gray-900 hover:scale-105 hover:text-red-600 border-2 hover:rounded-lg hover:bg-gray-200 rounded-lg">
                                <a class="justify-center items-center" href="{{ url('/home') }}">
                                    CRUD
                                </a>
                            </div>
                        @endhasrole
                    @endif
                </div>

                <!-- menu register -->

                <div id="gralregistro" class="flex h-24 order-1 lg:order-3 flex-row mr-10 items-center justify-center">

                    <div id="menuregister-1"
                        class="z-[50] w-auto h-auto order-1 lg:order-3 flex flex-row justify-center items-center  text-center relative">

                        <div id="mostrarregistra"  class="w-auto h-full flex flex-row justify-center items-center text-center ">
                            <form action="{{ route('logout') }}" method="POST" class="h-auto p-2 mt-5 flex flex-row justify-center items-center text-center  bg-gray-100 text-lg text-gray-900 border-2 rounded-3xl  hover:rounded-3xl hover:bg-gray-200 hover:text-red-600 hover:border-2 hover:border-white">
                                @csrf

                                <a class="w-auto h-auto hidden ml-1 sm:flex justify-center items-center text-black/60 text-center mr-2 "
                                    style="height: 16px;font-size:14px;">
                                    @if (Auth::check())
                                        <span>{{ Str::limit(ucwords(strtolower(Auth::user()->name)), 12) }}</span>
                                    @else
                                        <span id="verRegistro">Usuario</span>
                                    @endif
                                </a>
                                <a type="submit"
                                    class="flex w-auto h-auto justify-center items-center mx-auto my-auto text-center ">
                                    <img class="w-4 h-4 object-cover"
                                        src="{{ asset('images/usuario.png') }}" alt="usuario">
                                </a>
                            </form>
                        </div>

                    </div>
                    <!-- Dropdown menu -->

                    <div id="mnu-registro"
                        class="z-[60] hidden bg-gray-100 text-sm border-rbl-2 rounded-md absolute ml-[-15px] sm:ml-0 mt-[130px] md:mt-[140px] ">

                        @if (Route::has('login'))
                            <div class="flex flex-col justify-end  sm:text-sm md:text-md  text-gray-600">
                                @auth
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" class="inline">
                                        @csrf
                                        <button type="submit"
                                            class="rounded-md mt-3 px-3 hover:text-black/70 hover:bg-gray-200">
                                            Log out
                                        </button>
                                    </form>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="rounded-md px-3 py-1 ring-1 ring-transparent transition focus:outline-none  hover:text-black/70 hover:bg-gray-200 focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                        Ingresar
                                    </a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 ring-1 ring-transparent transition  hover:text-black/70 hover:bg-gray-200 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                            Registro
                                        </a>
                                    @endif
                                @endauth
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </nav>
        <!-- comienza la parte variable del cuerpo de la hoja -->
        <div class="mb-2">
            @yield('content')
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Asignar elementos a variables
            var navbarUser = document.getElementById('mnu-user');
            var registro = document.getElementById('mnu-registro');
            var userButton = document.getElementById('mnu-user-vertical');
            var registerButton = document.getElementById('mostrarregistra');

            // Función para mostrar u ocultar el menú vertical
            function toggleMenu(element) {
                element.style.display = element.style.display === 'none' ? 'flex' : 'none';
            }

            // Evento al hacer clic en el menú vertical de usuario
            userButton.addEventListener('click', function(e) {
                toggleMenu(navbarUser);
                // Detenemos la propagación del evento para evitar que se active el cierre inmediato del menú
                e.stopPropagation();
            });

            // Evento al hacer clic en el menú de registro
            registerButton.addEventListener('click', function(e) {
                toggleMenu(registro);
                // Detenemos la propagación del evento para evitar que se active el cierre inmediato del menú
                e.stopPropagation();
            });

            // Función para manejar el evento de cambio de tamaño de la ventana
            function handleResize() {
                if (window.innerWidth >= 1024) { // Reemplaza 992 por el ancho deseado para el tamaño 'lg'
                    navbarUser.style.display = 'flex';
                    registro.style.display = 'none';
                } else {
                    navbarUser.style.display = 'none';
                    registro.style.display = 'none';
                }
            }

            // Suscribir la función al evento 'resize' de la ventana
            window.addEventListener('resize', handleResize);

            // Ejecutar la función una vez al cargar la página para verificar el tamaño inicial de la ventana
            handleResize();

            // Si se hizo clic en algún lugar que no sea el botón de usuario o el menú de usuario, y el tamaño de la pantalla es menor o igual a lg, cerramos el menú de usuario
            document.addEventListener('click', function(e) {
                if (e.target !== userButton && !navbarUser.contains(e.target) && window.innerWidth <=
                    1024) {
                    navbarUser.style.display = 'none';
                } else {
                    navbarUser.style.display = 'flex';
                }

                // Si se hizo clic en algún lugar que no sea el botón de registro o el menú de registro, cerramos el menú de registro
                if (e.target !== registerButton && !registro.contains(e.target)) {
                    registro.style.display = 'none';
                }
            });
        });
    </script>
</body>

</html>
