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

//AKSES ROUTE DATA BUKU
Route::resource('buku','BukuController')->middleware('auth');

//AKSES ROUTE DATA KATEGORI
Route::resource('kategori','KategoriController')->middleware('auth');

Auth::routes();

Route::get('/','BukuController@index')->middleware('auth');

// Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
