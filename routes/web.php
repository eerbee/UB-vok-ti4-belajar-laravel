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

//[------ADMIN------]//
//ROUTE TAMPILAN DASHBOARD
Route::resource('dashboard','DashboardController')->middleware('auth');

//AKSES ROUTE DATA BUKU
Route::resource('buku','BukuController')->middleware('auth');

//AKSES ROUTE EKSPORT EXCEL
Route::get('export_excel', 'BukuController@export_excel')->middleware('auth');

//AKSES ROUTE DATA KATEGORI
Route::resource('kategori','KategoriController')->middleware('auth');

//AKSES TAMPILAN KALENDAR
Route::get('/kalendar', function () {
    return view('pages/admin/calendar');
})->middleware('auth');


//[------PUBLIC------]//
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
