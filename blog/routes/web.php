<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', HomeController :: class);

Route::get ('cursos', [CursoController::class, 'index']);

Route::get('cursos/create',  [CursoController::class, 'create']);

route::get ('cursos/{curso}',  [CursoController::class, 'create']);
/*
Route::get('/', function () {
   // return view('welcome');
   return "bienvenidos gentessss";
});
*/
/*
Route::get ('cursos', function(){
    return "Bienvenidos a la página cursos";
});

Route::get('cursos/create', function () {
    return "En esta pagina podra crear un curso";
    
});
*/
/*
route::get ('cursos/{curso}', function ($curso){
    return "Bienvenido al curso: $curso";
});

Route::get('cursos/{curso}/{categoria}', function($curso, $categoria){
    return "Bienvenido al curso $curso, de la categoria $categoria";
});
*/
Route::get('cursos/{curso}/{categoria?}', function($curso, $categoria = null){
    if($categoria){
        return "Bienvenido al curso $curso, de la categoria $categoria";
    }else {
        return "Bienvendo al curso: $curso";
    }
    
});