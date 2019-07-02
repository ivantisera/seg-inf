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
     return view('register');
 });

//  Route::get('/thanks', function () {
//      return view('thanks');
//  });

// Route::get('/all', function () {
//     return view('all');
// });

// Route::get('/', function () {
//     return view('register');
// });

Route::get('', [
    'as' => 'register',
    'uses' => 'RegistrosController@registro',
]);

Route::get('/login', [
    'as' => 'login',
    'uses' => 'AuthController@verFormLogin',
]);

Route::post('/login', [
    'as' => 'auth.doLogin',
    'uses' => 'AuthController@doLogin',
]);

Route::get('logout', [
	'as' => 'auth.logout',
	'uses' => 'AuthController@doLogout'
]);


Route::post('nueva', [
    'as' => 'crear',
    'uses' => 'RegistrosController@crear',
]);

Route::get('/all', [
    'as' => 'all',
    'uses' => 'RegistrosController@index',
]);

Route::get('/thanks', [
    'as' => 'thanks',
    'uses' => 'RegistrosController@thanks',
]);

Route::group(
    [
        'middleware' => 'admin',
    ], function () {
        Route::get('panel', [
            'as' => 'panel',
            'uses' => 'PanelController@index',
        ]);        
    });

