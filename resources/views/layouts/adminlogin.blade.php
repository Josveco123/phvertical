<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/styles/style.css') }}" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div id="container">
        <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brandclass flex flex-row w-14 h-auto text-decoration-none text-white h2 mb-0"
                    href="#"><img src="{{ asset('storage/images/logo ph.jpg') }}" alt="imagen logo" srcset=""
                        style="width: 25px;">
                </a>
                <a class="border rounded-full p-2 navbar-brandclass flex flex-row justify-center items-center text-center w-14 h-auto text-decoration-none text-white text-md mb-0 hover:bg-gray-600"
                href="{{ route('home') }}">Salir
            </a>
            </div>

        </nav>
        <main class="py-4">
            @yield('content')
        </main>


    </div>

    <script type="text/javascript"></script>
</body>

</html>
