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


Route::get('/', 'DataLongsorController@index');
Route::post('/longsor/tambah', 'DataLongsorController@tambah');
Route::post('/longsor/edit/{id}', 'DataLongsorController@edit');
Route::get('/longsor/hapus/{id}', 'DataLongsorController@hapus');
