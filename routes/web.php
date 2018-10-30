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

/*
Route::get('/', function () {
    return view('inicio');
})->name('inicio');
*/
Route::get('/', ['as' => 'inicio', 'uses' => 'PagesController@inicio']);

Route::get('categorias',['as' => 'categorias', 'uses' => 'PagesController@categorias']);

Route::post('crear_categorias', 'PagesController@crear_categorias');

Route::get('tareas',['as' => 'tareas', 'uses' => 'PagesController@tareas']);




//Rutas para Controlador CRUD

Route::get('categorias',['as' => 'categorias.index', 'uses' => 'CategoriasController@index']);
Route::get('categorias/crear',['as' => 'categorias.crear', 'uses' => 'CategoriasController@create']);
Route::post('categorias',['as' => 'categorias.store', 'uses' => 'CategoriasController@store']);
Route::get('categorias/{id}',['as' => 'categorias.show', 'uses' => 'CategoriasController@show']);
Route::get('categorias/{id}/edit',['as' => 'categorias.edit', 'uses' => 'CategoriasController@edit']);
Route::put('categorias/{id}',['as' => 'categorias.update', 'uses' => 'CategoriasController@update']);
Route::delete('categorias/{id}',['as' => 'categorias.destroy', 'uses' => 'CategoriasController@destroy']);