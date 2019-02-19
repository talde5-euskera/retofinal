<?php

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

Route::get('/', 'Auth\LoginController@showAlumnoLoginForm');

//perfil

Route::get('/perfil', 'PerfilController@cargarperfil');
Route::get('/perfil/editar', 'PerfilController@cargarperfileditar');
Route::get('/perfil/actualizar/{id}', 'PerfilController@actualizar');

//alumno
Route::resource('alumno/index', 'AlumnoController');
Route::get('alumno/show/{id}', 'AlumnoController@show');
Route::get('alumno/edit/{id}', 	'AlumnoController@edit');
Route::get('alumno/create','AlumnoController@create');
Route::put('alumno/edit/{id}','AlumnoController@update');
Route::get('alumno/insertar', 'AlumnoController@store');
Route::get('alumno/eliminar/{id}', 'AlumnoController@destroy');
Route::get('alumno/desactivar/{id}', 'AlumnoController@desactivar');
Route::get('alumno/activar/{id}', 'AlumnoController@activar');
Route::post('alumno/insertarcsv', 'AlumnoController@import');
//profesor
Route::resource('profesor/index', 'ProfesorController');
Route::get('profesor/show/{id}', 'ProfesorController@show');
Route::get('profesor/edit/{id}', 'ProfesorController@edit');
Route::get('profesor/create', 'ProfesorController@create');
Route::put('profesor/edit/{id}','ProfesorController@update');
Route::get('profesor/insertar', 'ProfesorController@store');
Route::get('profesor/eliminar/{id}', 'ProfesorController@destroy');
Route::get('profesor/desactivar/{id}', 'ProfesorController@desactivar');
//ofertas
Route::resource('oferta/index', 'OfertaController');
Route::get('oferta/show/{id}', 'OfertaController@show');
Route::get('oferta/edit/{id}', 'OfertaController@edit');
Route::put('oferta/edit/{id}','OfertaController@update');
Route::get('oferta/create', 'OfertaController@create');
Route::get('oferta/eliminar/{id}', 'OfertaController@destroy');
Route::get('oferta/insertar', 'OfertaController@store');
Route::get('oferta/apuntados/{id}', 'OfertaController@apuntar');
Route::get('oferta/quitarlista/{id}', 'OfertaController@quitarlista');
Route::get('oferta/apuntarse/{id}', 'OfertaController@apuntarse');


Route::resource('curriculum', 'CurriculumController');
Route::resource('curso', 'CursoController');

// Gotzon Add's
Route::get('/login/alumno', 'Auth\LoginController@showAlumnoLoginForm');
Route::get('/login/profesor', 'Auth\LoginController@showProfesorLoginForm');
Route::get('/register/alumno', 'Auth\RegisterController@showAlumnoRegisterForm');
Route::get('/register/profesor', 'Auth\RegisterController@showProfesorRegisterForm');

Route::post('/login/alumno', 'Auth\LoginController@AlumnoLogin');
Route::post('/login/profesor', 'Auth\LoginController@ProfesorLogin');
Route::post('/register/alumno', 'Auth\RegisterController@createAlumno');
Route::post('/register/profesor', 'Auth\RegisterController@createProfesor');

Route::view('/home', 'home')->middleware('auth');
Route::get('/index', 'IndexController@personalog');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');