<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contactos extends Controller
{
    public function contactos()
    {
        $contactos= [
            ["prueba"=> "cuando se tiene la imaginacion necesaria para las realidades se toman desiciones.\n Pero es importante tener en cuenta muchas utilidqades"]
        ];
        return view('contacto', ['contactos' => $contactos]);
    }}
