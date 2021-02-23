<?php

use Illuminate\Support\Facades\Route;

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
//principales
Route::get('/', function () {
    return view('/menu');
});

Route::get('inicio', function () {
    return view('/menu');
});
//Rutas
Route::get('/inicio/convocatoria2020', 'CMenu@convocatoria');
Route::get('/inicio/convocatoria2020/etapa1-pre-registro', 'CMenu@etapa1');
Route::get('/inicio/convocatoria2020/curso-induccion', 'CMenu@etapa2');
Route::get('/inicio/convocatoria2020/Inscripción', 'CMenu@etapa3');
Route::get('/inicio/convocatoria2020/contacto', 'CMenu@contacto');