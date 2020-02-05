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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'ProductController@index');

Route::get('/stisla', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('layouts/backend/hal_dashboard');
});

Route::get('/buku', function () {
    return view('layouts/backend/hal_buku');
});