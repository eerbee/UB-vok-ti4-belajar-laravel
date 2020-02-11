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
Route::get('/dashboard', function () {
    return view('pages/backend/dashboard');
});

//ROUTE TAMPILAN PEMINJAMAN BUKU
Route::get('/peminjaman', function () {
    return view('pages/backend/peminjaman');
});

//ROUTE TAMPILAN DATA BUKU
Route::get('/buku', 'BukuController@indexBuku');

//AKSES ROUTE
Route::resource('buku','BukuController');



// Route::get('buku/{buku}/detail', 'BukuController@show');

// Route::get('buku/tambah_buku', 'BukuController@create');

// Route::post('buku', 'BukuController@store');

// Route::get('buku/{buku}/edit_buku', 'BukuController@edit');

// Route::post('buku/{buku}/update', 'BukuController@update');

// Route::get('buku/{buku}/delete', 'BukuController@destroy');