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

Route::get('/lokasi','LokasiController@index');

Route::get('lokasi/input','LokasiController@input');
Route::post('lokasi/input','LokasiController@add');
Route::get('/lokasi/{id}', 'LokasiController@edit');
Route::get('/lokasi/delete/{id}', 'LokasiController@delete');
Route::post('/lokasi/{id}', 'LokasiController@update');
