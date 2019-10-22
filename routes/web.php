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


Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/daftar', 'HomeController@index1');
Route::get('/kamus', 'HomeController@index2');
Route::get('/kamus1', 'HomeController@index3');
Route::get('/kamus2', 'HomeController@index4');
Route::get('/kamus3', 'HomeController@index5');
Route::get('/kamus4', 'HomeController@index6');
Route::get('/kamus5', 'HomeController@index7');
Route::get('/kamus6', 'HomeController@index8');
Route::get('/kamus7', 'HomeController@index9');
Route::get('/kamus8', 'HomeController@index10');
