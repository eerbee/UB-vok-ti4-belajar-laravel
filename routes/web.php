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

//ROUTE TAMPILAN DASHBOARD
Route::get('dashboard', function () {
    return view('pages/backend/dashboard');
});

Route::get('buku', 'BukuController@buku');

Route::get('buku/tambah_buku', 'BukuController@create');

Route::post('buku', 'BukuController@store');

Route::get('buku/{buku}/edit_buku', 'BukuController@edit');

Route::post('buku/{buku}/update', 'BukuController@update');

Route::get('buku/{buku}/delete', 'BukuController@destroy');