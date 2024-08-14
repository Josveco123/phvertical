<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/styles/style.css') }}" rel="stylesheet">

    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div id="wrapper">
        <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brandclass flex flex-row w-14 h-auto text-decoration-none text-white h2 mb-0"
                    href="{{ url('/') }}"><img src="{{ asset('storage/images/logophv.jpg') }}" alt="imagen logo" srcset=""
                        style="width: 25px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarText">
                    @auth('admin')
                        <ul class="navbar-nav side-nav">
                            <li class="nav-item">
                                <a class="nav-link text-white" style="margin-left: 20px;"
                                    href="{{ route('admins.dashboard') }}">Inicio
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admins.admins') }}"
                                    style="margin-left: 20px;">Administradores</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admins.hometypes') }}" style="margin-left: 20px;">Tipos
                                    de Propiedad</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('props.all') }}"
                                    style="margin-left: 20px;">Propiedades</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('gallery.all') }}" style="margin-left: 20px;">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('requests.all') }}"
                                    style="margin-left: 20px;">Peticiones</a>
                            </li>
                        </ul>
                    @endauth
                    <ul class="navbar-nav ml-md-auto d-md-flex">

                        @auth('admin')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admins.dashboard') }}">Inicio
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::guard('admin')->user()->name }}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logoutadmin') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form"  method="POST" action="{{ route('logoutadmin') }}" class="d-none">
                                        @csrf
                                    </form>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link text-sm" href="#" onclick="window.close();">Salir</a>
                                </a>
                            </li>
                        @endauth

                    </ul>
                </div>
            </div>
        </nav>

        <div id="screen-warning" class="alert alert-danger d-block d-lg-none" role="alert">
            Esta opcion solo funciona para pantallas tamaño lg en adelante.(992px en adelante)
        </div>
        <div class="container-fluid d-none d-lg-block">

            <main class="py-4">
                @yield('content')
            </main>

        </div>

    </div>
    </div>
    <script type="text/javascript"></script>
</body>

</html>
