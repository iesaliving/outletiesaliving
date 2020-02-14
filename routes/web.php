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



Route::get('/gracias', function () {
    return view('gracias');
});



Route::post('/enviar-correo', 'MailController@enviar');

