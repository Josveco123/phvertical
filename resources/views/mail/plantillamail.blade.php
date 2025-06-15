<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail LDC</title>
</head>
<body>

    <img style="width: 100px; height: auto; margen-top: 4vw;"  src="{{ $message->embed(public_path('images/logo.png')) }}" alt="distribuidor">
    <h1 class="mt-6 ml-6 text-lg">Hola, Señores Laboratorio del caribe SAS. </h1>
    <p class="ml-6 mt-5 text-md"><strong class="text-green-400 text-1xl">Has recibido un mensaje del formato de contacto en tu WEB, del señor: </strong><strong>{{ $data['name'] }}</strong></p>
    <p><strong class="ml-6 mt-5 text-md">Email del remitente: </strong> {{ $data['email'] }}</p>
    <p><strong class="ml-6 mt-5 text-md">Telefono del remitente: </strong> {{ $data['phone'] }}</p>
    <p><strong class="ml-6 mt-5 text-md">Texto del Mensaje: </strong> {{ $data['message'] }}</p>
</body>
</html>
