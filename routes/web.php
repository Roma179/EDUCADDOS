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
    return view('/inicio');
});

Route::get('inicio', function () {
    return view('/inicio');
});
Route::get('media_superior', function () {
    return view('/media_superior');
});
Route::get('licenciatura_ingenieria', function () {
    return view('/licenciatura_ingenieria');
});
Route::get('maestria', function () {
    return view('/maestria');
});
//Rutas
Route::get('/inicio/convocatoria2020', 'CMenu@convocatoria');
Route::get('/inicio/convocatoria2020/etapa1-pre-registro', 'CMenu@etapa1')->name('preins');
Route::post('/inicio/convocatoria2020/etapa1-pre-registro/informacion', 'CMenu@preinscripcion');
Route::post('guardar_preinscripcion', 'PreinscripcionController@guardar')->name('guardar_preinscripcion');

Route::get('/inicio/convocatoria2020/curso-induccion', 'CMenu@etapa2');
Route::get('/inicio/convocatoria2020/Inscripción', 'CMenu@etapa3');
Route::get('/inicio/convocatoria2020/contacto', 'CMenu@contacto');