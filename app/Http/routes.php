<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function() {
	Route::resource('users','UsersController');
	Route::resource('cursos','CursosController');
	Route::resource('estudiantes','EstudiantesController');
	/*rutas para eliminar registros directamente en el index*/
	Route::get('users/{id}/destroy',[
			'uses' => 'UsersController@destroy',
			'as'   => 'admin.users.destroy'	
		]);
	Route::get('cursos/{id}/destroy',[
			'uses' => 'CursosController@destroy',
			'as'   => 'admin.cursos.destroy'	
		]);
	Route::get('estudiantes/{id}/destroy',[
			'uses' => 'EstudiantesController@destroy',
			'as'   => 'admin.estudiantes.destroy'	
		]);
	
});
