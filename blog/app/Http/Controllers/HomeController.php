<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
        /* return view ('welcome');*/
        return "Bienvenido a la pagina principal desde el controlador";
    }
}
