<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index () {
        return "Bienvenido a la pagina princiapal";
    }

    public function create () {
        return "En esta página podras crear un curso";
    }
    public function show ($cruso) {
        return "Bienvenido al curso $curso";
    }
}
