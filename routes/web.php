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

//Rotas com view

Route::get('/', function(){
	return view('welcome');
})->name('welcome');

Route::get('/planeta', function (){
    return view('planeta');
})->name('planeta');

Route::get('/estrela', function (){
    return view('estrela');
})->name('estrela');

Route::get('/galaxia', function (){
    return view('galaxia');
})->name('galaxia');

Route::get('/sist', function (){
    return view('sist');
})->name('sist');

Route::get('/sn', function (){
    return view('sn');
})->name('sn');

Route::get('/planetasist', function (){
    return view('planetasist');
})->name('planetasist');

Route::get('/estrelasist', function (){
    return view('estrelasist');
})->name('estrelasist');

Route::get('/orbitar', function (){
    return view('orbitar');
})->name('orbitar');

Route::get('/buraconegro', function (){
    return view('buraconegro');
})->name('buraconegro');

    Route::get('/relacionamentos', function (){
    return view('relacoes');
})->name('relacoes');

//Rotas com controller, mas apenas usa view
Route::get('/planeta/create', 'CRUDPlanetaController\CPlanetaController@create')->name('planeta.create')->middleware('auth');
Route::get('/planeta/read', 'CRUDPlanetaController\RPlanetaController@read')->name('planeta.read')->middleware('auth');
Route::get('/planeta/update', 'CRUDPlanetaController\UPlanetaController@update')->name('planeta.update')->middleware('auth');
Route::get('/planeta/delete', 'CRUDPlanetaController\DPlanetaController@delete')->name('planeta.delete')->middleware('auth');

//Rotas com uso total do controller (back-end)
Route::post('/planeta/create/createresponse','CRUDPlanetaController\CPlanetaController@createresponse') ->name('planeta.createresponse')->middleware('auth');
Route::get('/planeta/read/readresponse','CRUDPlanetaController\RPlanetaController@readresponse')->name('planeta.readresponse')->middleware('auth');
Route::post('/planeta/update/updateresponse','CRUDPlanetaController\UPlanetaController@updateresponse')->name('planeta.updateresponse')->middleware('auth');
Route::post('/planeta/delete/deleteresponse','CRUDPlanetaController\DPlanetaController@deleteresponse')->name('planeta.deleteresponse')->middleware('auth');

//Rotas com controller, mas apenas usa view
Route::get('/estrela/create', 'CRUDEstrelaController\CEstrelaController@create')->name('estrela.create')->middleware('auth');
Route::get('/estrela/read', 'CRUDEstrelaController\REstrelaController@read')->name('estrela.read')->middleware('auth');
Route::get('/estrela/update', 'CRUDEstrelaController\UEstrelaController@update')->name('estrela.update')->middleware('auth');
Route::get('/estrela/delete', 'CRUDEstrelaController\DEstrelaController@delete')->name('estrela.delete')->middleware('auth');

//Rotas com uso total do controller (back-end)
Route::post('/estrela/create/createresponse','CRUDEstrelaController\CEstrelaController@createresponse') ->name('estrela.createresponse')->middleware('auth');
Route::get('/estrela/read/readresponse','CRUDEstrelaController\REstrelaController@readresponse')->name('estrela.readresponse')->middleware('auth');
Route::post('/estrela/update/updateresponse','CRUDEstrelaController\UEstrelaController@updateresponse')->name('estrela.updateresponse')->middleware('auth');
Route::post('/estrela/delete/deleteresponse','CRUDEstrelaController\DEstrelaController@deleteresponse')->name('estrela.deleteresponse')->middleware('auth');

//Rotas com controller, mas apenas usa view
Route::get('/galaxia/create', 'CRUDGalaxiaController\CGalaxiaController@create')->name('galaxia.create')->middleware('auth');
Route::get('/galaxia/read', 'CRUDGalaxiaController\RGalaxiaController@read')->name('galaxia.read')->middleware('auth');
Route::get('/galaxia/update', 'CRUDGalaxiaController\UGalaxiaController@update')->name('galaxia.update')->middleware('auth');
Route::get('/galaxia/delete', 'CRUDGalaxiaController\DGalaxiaController@delete')->name('galaxia.delete')->middleware('auth');

//Rotas com uso total do controller (back-end)
Route::post('/galaxia/create/createresponse','CRUDGalaxiaController\CGalaxiaController@createresponse') ->name('galaxia.createresponse')->middleware('auth');
Route::get('/galaxia/read/readresponse','CRUDGalaxiaController\RGalaxiaController@readresponse')->name('galaxia.readresponse')->middleware('auth');
Route::post('/galaxia/update/updateresponse','CRUDGalaxiaController\UGalaxiaController@updateresponse')->name('galaxia.updateresponse')->middleware('auth');
Route::post('/galaxia/delete/deleteresponse','CRUDGalaxiaController\DGalaxiaController@deleteresponse')->name('galaxia.deleteresponse')->middleware('auth');

//Rotas com controller, mas apenas usa view
Route::get('/sist/create', 'CRUDSistController\CSistController@create')->name('sist.create')->middleware('auth');
Route::get('/sist/read', 'CRUDSistController\RSistController@read')->name('sist.read')->middleware('auth');
Route::get('/sist/update', 'CRUDSistController\USistController@update')->name('sist.update')->middleware('auth');
Route::get('/sist/delete', 'CRUDSistController\DSistController@delete')->name('sist.delete')->middleware('auth');

//Rotas com uso total do controller (back-end)
Route::post('/sist/create/createresponse','CRUDSistController\CSistController@createresponse') ->name('sist.createresponse')->middleware('auth');
Route::get('/sist/read/readresponse','CRUDSistController\RSistController@readresponse')->name('sist.readresponse')->middleware('auth');
Route::post('/sist/update/updateresponse','CRUDSistController\USistController@updateresponse')->name('sist.updateresponse')->middleware('auth');
Route::post('/sist/delete/deleteresponse','CRUDSistController\DSistController@deleteresponse')->name('sist.deleteresponse')->middleware('auth');

//Rotas com controller, mas apenas usa view
Route::get('/sn/create', 'CRUDSnController\CSnController@create')->name('sn.create')->middleware('auth');
Route::get('/sn/read', 'CRUDSnController\RSnController@read')->name('sn.read')->middleware('auth');
Route::get('/sn/update', 'CRUDSnController\USnController@update')->name('sn.update')->middleware('auth');
Route::get('/sn/delete', 'CRUDSnController\DSnController@delete')->name('sn.delete')->middleware('auth');

//Rotas com uso total do controller (back-end)
Route::post('/sn/create/createresponse','CRUDSnController\CSnController@createresponse') ->name('sn.createresponse')->middleware('auth');
Route::get('/sn/read/readresponse','CRUDSnController\RSnController@readresponse')->name('sn.readresponse')->middleware('auth');
Route::post('/sn/update/updateresponse','CRUDSnController\USnController@updateresponse')->name('sn.updateresponse')->middleware('auth');
Route::post('/sn/delete/deleteresponse','CRUDSnController\DSnController@deleteresponse')->name('sn.deleteresponse')->middleware('auth');

//Rotas com controller, mas apenas usa view
Route::get('/planetasist/create', 'CRUDPlanetaSistController\CPlanetaSistController@create')->name('planetasist.create')->middleware('auth');
Route::get('/planetasist/read', 'CRUDPlanetaSistController\RPlanetaSistController@read')->name('planetasist.read')->middleware('auth');
Route::get('/planetasist/update', 'CRUDPlanetaSistController\UPlanetaSistController@update')->name('planetasist.update')->middleware('auth');
Route::get('/planetasist/delete', 'CRUDPlanetaSistController\DPlanetaSistController@delete')->name('planetasist.delete')->middleware('auth');

//Rotas com uso total do controller (back-end)
Route::post('/planetasist/create/createresponse','CRUDPlanetaSistController\CPlanetaSistController@createresponse') ->name('planetasist.createresponse')->middleware('auth');
Route::get('/planetasist/read/readresponse','CRUDPlanetaSistController\RPlanetaSistController@readresponse')->name('planetasist.readresponse')->middleware('auth');
Route::post('/planetasist/update/updateresponse','CRUDPlanetaSistController\UPlanetaSistController@updateresponse')->name('planetasist.updateresponse')->middleware('auth');
Route::post('/planetasist/delete/deleteresponse','CRUDPlanetaSistController\DPlanetaSistController@deleteresponse')->name('planetasist.deleteresponse')->middleware('auth');

//Rotas com controller, mas apenas usa view
Route::get('/estrelasist/create', 'CRUDEstrelaSistController\CEstrelaSistController@create')->name('estrelasist.create')->middleware('auth');
Route::get('/estrelasist/read', 'CRUDEstrelaSistController\REstrelaSistController@read')->name('estrelasist.read')->middleware('auth');
Route::get('/estrelasist/update', 'CRUDEstrelaSistController\UEstrelaSistController@update')->name('estrelasist.update')->middleware('auth');
Route::get('/estrelasist/delete', 'CRUDEstrelaSistController\DEstrelaSistController@delete')->name('estrelasist.delete')->middleware('auth');

//Rotas com uso total do controller (back-end)
Route::post('/estrelasist/create/createresponse','CRUDEstrelaSistController\CEstrelaSistController@createresponse') ->name('estrelasist.createresponse')->middleware('auth');
Route::get('/estrelasist/read/readresponse','CRUDEstrelaSistController\REstrelaSistController@readresponse')->name('estrelasist.readresponse')->middleware('auth');
Route::post('/estrelasist/update/updateresponse','CRUDEstrelaSistController\UEstrelaSistController@updateresponse')->name('estrelasist.updateresponse')->middleware('auth');
Route::post('/estrelasist/delete/deleteresponse','CRUDEstrelaSistController\DEstrelaSistController@deleteresponse')->name('estrelasist.deleteresponse')->middleware('auth');

//Rotas com controller, mas apenas usa view
Route::get('/orbitar/create', 'CRUDOrbitarController\COrbitarController@create')->name('orbitar.create')->middleware('auth');
Route::get('/orbitar/read', 'CRUDOrbitarController\ROrbitarController@read')->name('orbitar.read')->middleware('auth');
Route::get('/orbitar/update', 'CRUDOrbitarController\UOrbitarController@update')->name('orbitar.update')->middleware('auth');
Route::get('/orbitar/delete', 'CRUDOrbitarController\DOrbitarController@delete')->name('orbitar.delete')->middleware('auth');

//Rotas com uso total do controller (back-end)
Route::post('/orbitar/create/createresponse','CRUDOrbitarController\COrbitarController@createresponse') ->name('orbitar.createresponse')->middleware('auth');
Route::get('/orbitar/read/readresponse','CRUDOrbitarController\ROrbitarController@readresponse')->name('orbitar.readresponse')->middleware('auth');
Route::post('/orbitar/update/updateresponse','CRUDOrbitarController\UOrbitarController@updateresponse')->name('orbitar.updateresponse')->middleware('auth');
Route::post('/orbitar/delete/deleteresponse','CRUDOrbitarController\DOrbitarController@deleteresponse')->name('orbitar.deleteresponse')->middleware('auth');

//Rotas com controller, mas apenas usa view
Route::get('/buraconegro/create', 'CRUDBuraconegroController\CBuraconegroController@create')->name('buraconegro.create')->middleware('auth');
Route::get('/buraconegro/read', 'CRUDBuraconegroController\RBuraconegroController@read')->name('buraconegro.read')->middleware('auth');
Route::get('/buraconegro/update', 'CRUDBuraconegroController\UBuraconegroController@update')->name('buraconegro.update')->middleware('auth');
Route::get('/buraconegro/delete', 'CRUDBuraconegroController\DBuraconegroController@delete')->name('buraconegro.delete')->middleware('auth');

//Rotas com uso total do controller (back-end)
Route::post('/buraconegro/create/createresponse','CRUDBuraconegroController\CBuraconegroController@createresponse') ->name('buraconegro.createresponse')->middleware('auth');
Route::get('/buraconegro/read/readresponse','CRUDBuraconegroController\RBuraconegroController@readresponse')->name('buraconegro.readresponse')->middleware('auth');
Route::post('/buraconegro/update/updateresponse','CRUDBuraconegroController\UBuraconegroController@updateresponse')->name('buraconegro.updateresponse')->middleware('auth');
Route::post('/buraconegro/delete/deleteresponse','CRUDBuraconegroController\DBuraconegroController@deleteresponse')->name('buraconegro.deleteresponse')->middleware('auth');


//Auth::routes();

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
//Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
//Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
//Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
//Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');
