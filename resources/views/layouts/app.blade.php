<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- imported css file -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
    <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css') }}">

    <!-- Elimina la versión local de Bootstrap si prefieres usar la versión CDN -->

    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/mediaelementplayer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fl-bigmug-line.css') }}">

    <!-- Usa la versión CDN de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>pagina leyouts.app</title>
</head>

<body>
    <div id="app" style="margin-top: -25px">
        <div class="site-navbar mt-4 ">
            <div class="container py-1">
                <div class="row align-items-center ">
                    <div class="col-3 col-md-3 col-lg-2 ">
                        <h1 class="mb-0">
                            <a href="{{ url('/') }}"
                                class="flex flex-row w-32 h-auto text-decoration-none text-white h2 mb-0">
                                <img class="w-14 " src="{{ asset('storage/images/logophv.jpg') }}" alt="imagen logo"
                                    srcset="">
                            </a>
                        </h1>
                    </div>
                    <div class="col-9 col-md-9 col-lg-10">
                        <nav class="site-navigation text-right text-md-right" role="navigation">

                            <!-- Aquí se inicializa el Offcanvas correctamente -->

                            <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3">
                                <a href="#" class="site-menu-toggle js-menu-toggle text-white"
                                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample">
                                    <span class="icon-menu h3"></span>
                                </a>
                            </div>

                            <!-- Aquí FINALIZA LA PRIMERA PARTE Offcanvas correctamente -->

                            <ul class="site-menu js-clone-nav d-none d-lg-block text-xs">
                                <li class="active"><a href="{{ url('/') }}">Inicio</a></li>
                                <li><a href="{{ route('buy.prop') }}">Comprar</a></li>
                                <li><a href="{{ route('rent.prop') }}">Rentar</a></li>
                                <li class="has-children">
                                    <a href="#">Propiedades</a>
                                    <ul class="dropdown arrow-top">
                                        @foreach ($homeTypes as $hometype)
                                            <li><a
                                                    href="{{ route('display.prop.hometype', $hometype->hometypes) }}">{{ $hometype->hometypes }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{ route('about') }}">Nosotros</a></li>
                                <li><a href="{{ route('contact') }}">Contacto</a></li>
                                @auth
                                    @if (Auth::user()->role === 'master')
                                        <li><a href="{{ route('view.login') }}" target="_blank">C.R.U.D</a></li>
                                    @endif
                                @endauth
                                @guest
                                    @if (Route::has('login'))
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                    @endif
                                    @if (Route::has('register'))
                                        <li><a href="{{ route('register') }}">Register</a></li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                            role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('all.requests') }}">Todas las
                                                solicitadas</a>
                                            <a class="dropdown-item" href="{{ route('all.saved.props') }}">Todas las
                                                posibles</a>
                                                <a class="dropdown-item" href="{{ route('form.cambio.password') }}">Cambiar su contraseña</a>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    Cerrar sesion
                                                </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Offcanvas HTML  aqui comienza el menu tres rallas-->

        <div class="offcanvas offcanvas-start bg-gray-500 text-white" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header w-full">

                <h5 class="w-full offcanvas-title text-2xl text-center items-center" id="offcanvasExampleLabel">Menú</h5>

                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>

            </div>

            <div class="offcanvas-body flex flex-col justify-start items-center">
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{ url('/') }}">Inicio</a></li>
                    <li class="mb-2"><a href="{{ route('buy.prop') }}">Comprar</a></li>
                    <li class="mb-2"><a href="{{ route('rent.prop') }}">Rentar</a></li>
                    <li class="has-children mb-2 hidden lg-flex">
                        <a href="#" class="mb-2">Propiedades</a>
                        <ul class="dropdown arrow-top ">
                            @foreach ($homeTypes as $hometype)
                                <li class="mb-2"><a
                                        href="{{ route('display.prop.hometype', $hometype->hometypes) }}">{{ $hometype->hometypes }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li class="mb-2">

                    <li class="mb-2"><a href="{{ route('about') }}">Nosotros</a></li>
                    <li class="mb-2"><a href="{{ route('contact') }}">Contacto</a></li>
                    @auth
                        @if (Auth::user()->role === 'master')
                            <li><a href="{{ route('view.login') }}" target="_blank">C.R.U.D</a></li>
                        @endif
                    @endauth
                    @guest
                        @if (Route::has('login'))
                            <li class="mb-2"><a href="{{ route('login') }}">Login</a></li>
                        @endif
                        @if (Route::has('register'))
                            <li class="mb-2"><a href="{{ route('register') }}">Register</a></li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('all.requests') }}">Todas las solicitadas</a>
                                <a class="dropdown-item" href="{{ route('all.saved.props') }}">Todas las posibles</a>
                                <a class="dropdown-item" href="{{ route('form.cambio.password') }}">Cambiar su contraseña</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Cerrar sesion
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>

        <!-- aqui termina el menu tres rallas  -->


    </div>

    <main class="py-4">
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="row justify-between ">
                <div class="col-lg-4">
                    <div class="mb-4" style="margin-right: 20px;">
                        <h3 class="w-full flex flex-row justify-center items-center footer-heading mb-1">Sobre el sitio
                        </h3>
                        <div class="mb-3 w-full bg-gradient-to-r from-white via-gray-500 to-black h-1"></div>
                        <p class="w-full flex flex-row justify-center items-center text-justify">Lorem ipsum dolor sit
                            amet, consectetur adipisicing elit. Saepe pariatur reprehenderit vero atque, consequatur id
                            ratione, et non dignissimos culpa? Ut veritatis, quos illum totam quis blanditiis, minima
                            minus odio!</p>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="row w-full flex flex-row justify-center">
                        <h3 class="mb-1 footer-heading mb-4w-full flex flex-row justify-center items-center">Navegacion
                        </h3>
                        <div class="mb-3 w-full bg-gradient-to-r from-white via-gray-500 to-black h-1"></div>
                        <div class="flex flex-row justify-center space-x-20">
                            <div class="ml-16 flex flex-row w-auto col-md-6 col-lg-6">
                                <ul class="list-unstyled">
                                    <li><a href="#">Inicio</a></li>
                                    <li><a href="#">Comprar</a></li>
                                    <li><a href="#">Rentar</a></li>
                                    <li><a href="#">Propiedades</a></li>
                                </ul>
                            </div>
                            <div class="w-auto flex flex-row col-md-6 col-lg-6 ">
                                <ul class="list-unstyled">
                                    <li><a href="#">Sobre Nosotros</a></li>
                                    <li><a href="#">Politica de Privacidad</a></li>
                                    <li><a href="#">Contactarnos</a></li>
                                    <li><a href="#">Terminos</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h3 class="footer-heading mb-1 w-full flex flex-row justify-center items-center">Siguenos</h3>
                    <div class="mb-3 w-full bg-gradient-to-r from-white via-gray-500 to-black h-1"></div>
                    <div class="w-full flex flex-row justify-center text-4xl">
                        <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                    </div>
                </div>
            </div>
            <div class="row pt-2 mt-2 text-center">
                <div class="col-md-12">
                    <p>Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> Codigo habierto | Esta pagina fue hecha por <a
                            href="{{ asset('storage/images/logojvc.png') }}" target="_blank">Jvc</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript assets -->
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
