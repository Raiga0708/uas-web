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

Route::prefix('/')
    ->namespace('Home')
    ->group(function () {
        Route::resource('/', 'IndexController');
        // Route::resource('/ginstagram', 'GinstagramController');
        // Route::resource('/program', 'ProgramController');
        // Route::resource('/tv', 'TvController');
        // Route::resource('/berita', 'BeritaController');
    });

    Route::prefix('home')
    ->namespace('Admin')
    ->group(function () {
        Route::resource('/', 'DashboardController');
        Route::resource('/talk', 'TalkController');
        // Route::resource('/galeri', 'GaleriController');
        // Route::resource('/rekomendasi', 'RekomendasiController');
        // Route::resource('/jadwaltv', 'JadwaltvController');
    });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
