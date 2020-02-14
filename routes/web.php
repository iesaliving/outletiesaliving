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

Route::get('/', function () {
    return view('index');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/showroom', function () {
    return view('showroom');
});

Route::get('/faq', function () {
    return view('faq-index');
});

Route::get('/aviso-privacidad', function () {
    return view('aviso-privacidad');
});

Route::get('/contacto', function () {
    return view('contacto');
});


Route::get('/sub-zero', 'MarcasController@Subzero');

Route::get('/wolf', 'MarcasController@Wolf');

Route::get('/cove', 'MarcasController@Cove');

Route::get('/cocina-exterior', 'MarcasController@CocinaExt');

Route::get('/asko', 'MarcasController@Asko');

Route::get('/dexa', 'MarcasController@Dexa');

Route::get('/scotsman', 'MarcasController@Scotsman');




/*********************GRACIASSSSS*******************/



Route::get('/gracias', 'GraciasController@GraciasDefault');

Route::get('/gracias-Showroom', 'GraciasController@GraciasDefault');

Route::get('/gracias-cookingdemo', 'GraciasController@GraciasDefault');

Route::get('/gracias-catalogo', 'GraciasController@GraciasCat');

Route::get('/gracias/contacto', 'GraciasController@GraciasDefault');




Route::post('/enviar-correo', 'MailController@enviar');

Route::post('/sumbit-contacto', 'MailController@submitContacto');

Route::post('/sumbit-showroom', 'MailController@submitShowroom');

Route::post('/submit-demo', 'MailController@submitDemo');




