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
    return view('welcome');
});
Route::get('list','TodoController@index');
Route::get('list/{todoid}','TodoController@show');
Route::get('creae-todo','TodoController@create');
Route::post('store-todo','TodoController@store');
Route::get('/list/{todoid}/edit/','TodoController@edit');
Route::post('/{todoid}/update',"TodoController@update");
Route::get('/list/{todoid}/delete','TodoController@destroy');
Route::get('/list/{todo}/complite','TodoController@complite');

