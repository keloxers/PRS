<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
App::setLocale('es');

// Session Routess
Route::get('login',  array('as' => 'login', 'uses' => 'SessionController@create'));
Route::get('logout', array('as' => 'logout', 'uses' => 'SessionController@destroy'));
Route::resource('sessions', 'SessionController', array('only' => array('create', 'store', 'destroy')));

// User Routes
Route::get('register', 'UserController@create');
Route::get('users/{id}/activate/{code}', 'UserController@activate')->where('id', '[0-9]+');
Route::get('resend', array('as' => 'resendActivationForm', function()
{
	return View::make('users.resend');
}));
Route::post('resend', 'UserController@resend');
Route::get('forgot', array('as' => 'forgotPasswordForm', function()
{
	return View::make('users.forgot');
}));
Route::post('forgot', 'UserController@forgot');
Route::post('users/{id}/change', 'UserController@change');
Route::get('users/{id}/reset/{code}', 'UserController@reset')->where('id', '[0-9]+');
Route::get('users/{id}/suspend', array('as' => 'suspendUserForm', function($id)
{
	return View::make('users.suspend')->with('id', $id);
}));
Route::post('users/{id}/suspend', 'UserController@suspend')->where('id', '[0-9]+');
Route::get('users/{id}/unsuspend', 'UserController@unsuspend')->where('id', '[0-9]+');
Route::get('users/{id}/ban', 'UserController@ban')->where('id', '[0-9]+');
Route::get('users/{id}/unban', 'UserController@unban')->where('id', '[0-9]+');
Route::resource('users', 'UserController');

// Group Routes
Route::resource('groups', 'GroupController');

App::missing(function($exception)
{

		return Response::view('pages.404');
});



// Index
Route::get( '/', array(
		'as' => 'articulos.index',
		'uses' => 'ArticulosController@index'
) );


Route::get('/afiliados/create', 'AfiliadosController@create');


Route::post( '/afiliados/store', array(
		'as' => 'afiliados.store',
		'uses' => 'AfiliadosController@store'
) );




# Standard User Routes
Route::group(['before' => 'auth|standardUser'], function()
{

		Route::resource('contactos', 'ContactosController');
		Route::get('/contactos/{id}/delete', 'ContactosController@destroy');


		Route::get('/articulos/ver', 'ArticulosController@ver');
		Route::get('/articulos/{id}/delete', 'ArticulosController@destroy');
		Route::get('/articulos/{id}/publicar', 'ArticulosController@publicar');

		Route::get('/articulos/{id}/archivos/{padre}', 'ArchivosController@index');


		Route::resource('archivos', 'ArchivosController');
		Route::get('/archivos/{id}/delete', 'ArchivosController@destroy');


		Route::resource('articulos', 'ArticulosController');


		// Route::get('/afiliados/{id}', 'AfiliadosController@show');
		// Route::get('/afiliados', 'AfiliadosController@index');

		Route::resource('afiliados', 'AfiliadosController');

//		Route::resource('clasificados', 'ClasificadosController');

// 		Route::resource('ofertas', 'OfertasController');

		// Route::resource('pages', 'PagesController');
		Route::get('/pages', 'PagesController@index');

		// Create
		Route::get( '/pages/create', array(
				'as' => 'pages.create',
				'uses' => 'PagesController@create'
		) );
		// Post
		Route::post( '/pages/store', array(
				'as' => 'pages.store',
				'uses' => 'PagesController@store'
		) );

		Route::get('/pages/{id}/edit', 'PagesController@edit');
		Route::put('/pages/{id}', 'PagesController@update');
		Route::get('/pages/{id}/delete', 'PagesController@destroy');

		// Route::resource('banners', 'BannersController');
		// Route::get('/banners/{id}/delete', 'BannersController@destroy');


});


Route::get('/pages/{url_seo}', 'PagesController@show');

Route::get('/articulos/show/{url_seo}', 'ArticulosController@show');
Route::get('/articulo/{url_seo}', 'ArticulosController@show');

Route::get('/', array('as' => 'home', 'uses' => 'ArticulosController@index'));





// Route::resource('clasificadoscategorias', 'ClasificadoscategoriasController');
