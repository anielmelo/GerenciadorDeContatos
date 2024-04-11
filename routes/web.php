<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['middleware'=>'web'], function(){
    Route::get('/', 'App\Http\Controllers\ContatoController@index');
    Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::get('/lista_contato', 'App\Http\Controllers\ContatoController@index')->name('lista_contato');
Route::get('/lista_contato/criar', 'App\Http\Controllers\ContatoController@create')->name('cria');
Route::post('/lista_contato/criar', 'App\Http\Controllers\ContatoController@store');
Route::get('/lista_contato/contato/{idContato}', 'App\Http\Controllers\ContatoController@show')->name('visualizaContato');
Route::put('/lista_contato/contato/{idContato}', 'App\Http\Controllers\ContatoController@update');
Route::delete('/lista_contato/remover/contato/{idContato}', 'App\Http\Controllers\ContatoController@destroy')->name('deleta');
