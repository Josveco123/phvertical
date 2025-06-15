<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Distribuidor;

class Welcome extends Controller
{
    public function welcome()
    {
            $blogs =  Blog::All();
            $distribuidor = Distribuidor::All();

        return view('welcome', ['blogs' => $blogs,"distribuidor"=> $distribuidor]);
    }
}
