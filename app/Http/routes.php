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

Route::get('/', ['as'=> 'welcome', function(){
    return view('monitoreo/monitoreo');
}]);

Route::get('/home', ['as'=> 'home', function(){
    return view('welcome');
}]);

Route::get('/monitoreo', ['as'=> 'monitoreo', function(){
    return view('monitoreo/monitoreo');
}]);

Route::get('/evaluacion', ['as'=> 'evaluacion', function(){
    return view('evaluacion');
}]);

Route::get('/redes_informacion', ['as'=> 'redes_informacion', function(){
    return view('redes_informacion');
}]);

Route::get('/detalle_estacion', ['as'=> 'detalle_estacion', function(){
    return view('monitoreo/detalle_estacion');
}]);

Route::get('/usuario', ['as'=> 'usuario', 'middleware'=>'auth', function(){
    return view('usuario');
}]);

Route::get('admin/auth/login', [
    'uses'  =>  'Auth\AuthController@getLogin',
    'as'    =>  'admin.auth.login'
]);
Route::post('admin/auth/login', [
    'uses'  =>  'Auth\AuthController@postLogin',
    'as'    =>  'admin.auth.login'
]);
Route::get('admin/auth/logout', [
    'uses'  =>  'Auth\AuthController@getLogout',
    'as'    =>  'admin.auth.logout'
]);

Route::group(['prefix'=>'admin'], function(){
  Route::resource('users','UsersController');
  Route::resource('personas','PersonasController');
});


Route::group(['middleware' => ['web']], function () {
    //
});
