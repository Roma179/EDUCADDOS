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
Route::get('/login', function () {
    return view('login');
});

//Rutas
Route::get('/inicio/convocatoria2020', 'CMenu@convocatoria');
Route::get('/inicio/convocatoria2020/etapa1-pre-registro', 'CMenu@etapa1')->name('preins');
Route::post('/inicio/convocatoria2020/etapa1-pre-registro/informacion', 'CMenu@preinscripcion');
Route::post('guardar_preinscripcion', 'PreinscripcionController@guardar')->name('guardar_preinscripcion');

Route::get('/inicio/convocatoria2020/curso-induccion', 'CMenu@etapa2');
Route::get('/inicio/convocatoria2020/Inscripción', 'CMenu@etapa3');
Route::get('/inicio/convocatoria2020/contacto', 'CMenu@contacto');

//rutas para superusuarios
Route::group(['middleware' => ['nocache','permission:view_users|edit_users|delete_users|create_users']], function() {
    Route::resource('users','UserController');
    Route::get('create','UserController@create');
    Route::get('edit/{id}','UserController@edit')->name('edit');
    Route::post('update/{id}','UserController@update')->name('update');
    Route::post('store','UserController@store')->name('store');
    Route::get('destroy/{id}','UserController@destroy')->name('destroy');
    Route::get('reactive/{id}','UserController@reactive')->name('reactive');
});

Route::group(['middleware' => ['nocache','permission:view_roles|edit_roles|delete_roles|create_roles']], function() {
    Route::resource('roles','RoleController');    
    Route::post('guardar_rol','RoleController@store')->name('guardar_rol');
});

Route::group(['middleware' => ['permission:view_preinscripcion','nocache']], function() {
//Route::group(['middleware' => ['permission:view_inscripcion']], function() {
    Route::get('/lista_preinscripcion','Admin\AdminController@showListPreinscri')->name('lista_preinscripcion');
    Route::get('/lista_documentos_inscr/{id}', 'Admin\DocumentosController@show_inscr')->name('lista_documentos_inscr');
    Route::post('/email_info_recibida_inscr', 'Admin\EmailController@sendEmailRecibiInscrip')->name('email_info_recibida_inscr');
    Route::post('actualizar_caci','Admin\AdminController@actualizarCaci')->name('actualizar_caci');
    Route::get('/email_lista_espera/{nombre_tutor}/{ap_paterno}/{email}', 'Admin\EmailController@sendEmailEspera')->name('email_lista_espera');
});

//rutas para roles
/* Route::group(['middleware' => ['permission:view_roles|edit_roles|delete_roles|create_roles']], function() {
}); */
//rutas para login
Route::get('seguridad/login','Seguridad\LoginController@index')->name('login');
Route::post('seguridad/login','Seguridad\LoginController@login')->name('login_post');
Route::get('seguridad/logout','Seguridad\LoginController@logout')->name('logout');

/* Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout')->name('logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); */
