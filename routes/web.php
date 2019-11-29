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

Route::get('/cocina-exterior', function () {
    $email="contacto@subzero-wolf.mx";
    return view('exteriores',compact('email'));
});

Route::get('/sub-zero', function () {
    $email="contacto@subzero-wolf.mx";
    return view('sub-zero',compact('email'));
});

Route::get('/wolf', function () {
    $email="contacto@subzero-wolf.mx";
    return view('wolf',compact('email'));
});

Route::get('/cove', function () {
    $email="contacto@subzero-wolf.mx";
    return view('cove',compact('email'));
});

Route::get('/asko', function () {
    $email="contacto@asko.com.mx";
    return view('asko',compact('email'));
});

Route::get('/scotsman', function () {
    $email="contacto@scotsman.mx";
    return view('scotsman',compact('email'));
});

Route::get('/dexa', function () {
    $email="contacto@dexa.mx";
    return view('dexa',compact('email'));
});

Route::get('/gracias', function () {
    return view('gracias');
});



Route::post('/enviar-correo', 'MailController@enviar');

