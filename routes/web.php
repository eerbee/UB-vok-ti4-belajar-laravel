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

//ROUTE TAMPILAN ADMIN-DASHBOARD
Route::get('/dashboard', function () {
    return view('pages/admin/dashboard');
});

//AKSES ROUTE DATA BUKU
Route::resource('buku','BukuController')->middleware('auth');

//AKSES ROUTE DATA KATEGORI
Route::resource('kategori','KategoriController')->middleware('auth');

//ROUTE TAMPILAN HOMEPAGE
Route::get('/', function () {
    return view('pages/public/homepage');
});

//ROUTE TAMPILAN ABOUS US
Route::get('/about_us', function () {
    return view('pages/public/about_us');
});

//ROUTE TAMPILAN KOLEKSI BUKU
Route::resource('/koleksi_buku','KoleksiBukuController');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
