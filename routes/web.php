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


Route::get('/exteriores', function () {
    return view('exteriores');
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


Route::get('/sub-zero', function () {
    return view('sub-zero');
});

Route::get('/wolf', function () {
    return view('wolf');
});

Route::get('/cove', function () {
    return view('cove');
});

Route::get('/asko', function () {
    return view('asko');
});

Route::get('/dexa', function () {
    return view('dexa');
});

Route::get('/gracias', function () {
    return view('gracias');
});
