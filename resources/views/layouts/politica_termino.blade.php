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
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div>
        <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brandclass flex flex-row w-14 h-auto text-decoration-none text-white h2 mb-0"
                    href="{{ url('/') }}"><img src="{{ asset('storage/images/logophv.jpg') }}" alt="imagen logo"
                        srcset="" style="width: 25px;">
                </a>


                <ul class="navbar-nav ml-md-auto d-md-flex">
                    <li id="salir" class="nav-item">
                        <a class="nav-link text-lg text.white" href="#" onclick="window.close();">Salir</a>
                        </a>
                    </li>
                </ul>

            </div>
        </nav>
        <div>
            @yield('content')
        </div>
    </div>
    </div>
    <script type="text/javascript"></script>
</body>

</html>
