<?php

// Route::redirect('/', '/login');

//

 Route::redirect('/home', '/admin');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');

    Route::resource('permissions', 'PermissionsController');
    Route::get('table/permissions', 'PermissionsController@table')->name('permissions.table');

    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');

    Route::resource('roles', 'RolesController');

    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::get('users/password', 'UsersController@change')->name('users.password');
    Route::post('change_password','UsersController@changePassword')->name('users.changePassword');

    Route::resource('users', 'UsersController');
    
    Route::resource('services',  'ServiceController');
    Route::get('table/services', 'ServiceController@table')->name('services.table');

    Route::resource('contacts', 'ContactController')->only(['index','store','update']);

    Route::resource('notice_privacy', 'NoticePrivacyController')->only(['index','store','update']);  

    Route::resource('home_page', 'HomePageController')->only(['index','show','store']);

    Route::resources([
        'brand'       => 'BrandController',
        'testimonies' => 'TestimonyController',
        'showroom'    => 'ShowroomController',
    ]);

    Route::get('showroom_page', 'ShowroomController@showroom_page')->name('showroom.page');

    Route::post('showroom_post', 'ShowroomController@showroom')->name('showroom.post');

    Route::resource('about_us', 'AboutUsController')->only(['index','store','update']);
    Route::resource('faq', 'FaqController');
    Route::resource('services',  'ServiceController')->only(['index','store','update']);




    Route::get('leads', 'LeadsController@index')->name('leads.index');

    Route::get('leads/create', 'LeadsController@create')->name('leads.create');

    Route::post('leads/store', 'LeadsController@store')->name('leads.store');

    Route::get('leads/tabla', 'LeadsController@table')->name('leads.table');

    Route::get('leads/edit', 'LeadsController@edit')->name('leads.edit');

    Route::put('leads/update', 'LeadsController@update')->name('leads.update');

    //Route::delete('leads/delete', 'LeadsController@delete')->name('leads.delete');

    Route::get('leads/prospecto', 'LeadsController@prospecto')->name('leads.prospecto');

    Route::get('leads/campos', 'LeadsController@campos')->name('leads.campos');

    Route::get('dealer', 'LeadsController@dealers')->name('leads.dealers');

    Route::post('leads/storeProspecto', 'LeadsController@storeProspecto')->name('leads.storeProspecto');

    Route::get('filterRepre', 'LeadsController@filterRepre')->name('leads.filterRepre');


    Route::get('deals/campos', 'DealsController@campos')->name('deals.campos');

    Route::get('deals', 'DealsController@index')->name('deals.index');

    Route::get('deals/create', 'DealsController@create')->name('deals.create');

    Route::post('deals/store', 'DealsController@store')->name('deals.store');

    Route::get('deals/tabla', 'DealsController@table')->name('deals.table');

    Route::get('deals/edit', 'DealsController@edit')->name('deals.edit');

    Route::put('deals/update', 'DealsController@update')->name('deals.update');

    //Route::delete('deals/delete', 'DealsController@delete')->name('deals.delete');

    Route::get('deals/rating', 'DealsController@rating')->name('deals.rating');

    Route::post('deals/storeRating', 'DealsController@storeRating')->name('leads.storeRating');

    Route::get('deals/cookDemo', 'DealsController@cookDemo')->name('deals.cookDemo');

    Route::post('deals/storeCookDemo', 'DealsController@storeCookDemo')->name('deals.storeCookDemo');

    Route::get('deals/precotizar', 'DealsController@precotizar')->name('deals.precotizar');

    Route::post('deals/storePreco', 'DealsController@storePreco')->name('deals.storePreco');


    Route::get('dealer', 'DealsController@dealers')->name('deals.dealers');
















});

Auth::routes(['register' => false]);

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

Route::get('/coronavirus-information', function () {
    return view('covid-19');
});

Route::get('/cita', function () {
    return view('calendry-cita');
});

Route::get('/cookingdemo-cita', function () {
    return view('calendry-cooking-demo-CDMX');
});

Route::get('/llamada-cdmx', function () {
    return view('calendry-llamada-cdmx');
});

Route::get('/llamada-latam', function () {
    return view('calendry-llamada-latam');
});

Route::get('/showroom-cita-cdmx', function () {
    return view('calendry-showroom-CDMX');
});

Route::get('/showroom-cita-monterrey', function () {
    return view('calendry-showroom-monterrey');
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

Route::get('/optout', 'MailController@optout');

Route::get('/submit-optout', 'MailController@submitOptout');

Route::get('/submit-optoutPhone', 'MailController@submitOptoutPhone');


Route::get('/sub-zero', 'MarcasController@Subzero');

Route::get('/wolf', 'MarcasController@Wolf');

Route::get('/cove', 'MarcasController@Cove');

Route::get('/cocina-exterior', 'MarcasController@CocinaExt');

Route::get('/asko', 'MarcasController@Asko');

Route::get('/dexa', 'MarcasController@Dexa');

Route::get('/scotsman', 'MarcasController@Scotsman');

Route::get('/plum-wine', 'MarcasController@plumWine');



/*********************GRACIASSSSS*******************/



Route::get('/gracias', 'GraciasController@GraciasDefault')->name('gracias');

Route::get('/gracias-Showroom', 'GraciasController@GraciasShowRoom');

Route::get('/gracias-llamada', 'GraciasController@GraciasLlamada');

Route::get('/gracias-cookingdemo', 'GraciasController@GraciasCookdemo');

Route::get('/gracias-catalogo', 'GraciasController@GraciasCat');

Route::get('/gracias/{control}', 'GraciasController@GraciasDefault');

Route::get('/gracias/contacto', 'GraciasController@GraciasDefault');

Route::get('/gracias-rating', 'GraciasController@GraciasRating')->name('GraciasRating');

Route::get('/gracias-optin', 'GraciasController@graciasOptin')->name('graciasOptin');

Route::get('/gracias-optout', 'GraciasController@graciasOptout')->name('graciasOptout');





Route::post('/enviar-correo', 'MailController@enviar');

Route::post('/sumbit-contacto', 'MailController@submitContacto');

Route::post('/sumbit-showroom', 'MailController@submitShowroom');

Route::post('/submit-demo', 'MailController@submitDemo');

Route::post('/submit-brand', 'MailController@submitBrand');

Route::get('/submit-calendry', 'MailController@submitCalendry');


/**********ZOHO API**************************/


Route::get('/zohoApi', 'ZohoV2Controller@getRecords');

Route::get('/rating-funnel', 'ZohoV2Controller@ratingFunnel');

Route::post('/calificacion', 'ZohoV2Controller@confirmarCalificacion')->name('confirmarCalificacion');



Route::get('/rating', function () {
    return view('rating');
});


