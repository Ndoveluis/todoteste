<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



// Route::resource('membro','MembroController');
// Route::resource('projecto','ProjetoController');
// Route::resource('tarefa','TarefaController');
// //Route::get('membro','MembroController@create'); 

// Route::get('edit/{id}','MembroController@edit');
// Route::get('destroy/{id}','MembroController@destroy');

// Route::get('update','MembroController@update');

// Route::auth();
Auth::routes();
Route::resource('caixa','CaixaController');


// Route::resource('caixa','CaixaController');
// Route::get('edit/{id}','CaixaController@edit');
// //Route::get('destroy/{id}','CaixaController@destroy');
// Route::get('destroy/{id}','CaixaController@destroy');
// Route::get('update','CaixaController@update');


Route::get('/home', 'HomeController@index');
Route::resource('registar','RegisterController');
Route::resource('login','LoginController');


// Route::group(['middleware' => ['web']], function () {
//     //
// });

// Route::group(['middleware' => 'web'], function () {
//     Route::auth();

// //  Route::get('/', 'CaixaController@index');
//   Route::get('/', 'HomeController@index');

// });
Auth::routes();

Route::get('/home', 'HomeController@index');
