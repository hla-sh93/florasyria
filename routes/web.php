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
Route::redirect('/','/en');
Route::group(['prefix' => '{language}'], function(){


    Route::get('/', function () {
        return view('index');
    })->name('/');

    Route::get('/about', function () {
        return view('about');
    })->name('about');

    Route::get('/team', function () {
        return view('team');
    })->name('team');

    Route::get('/publications', function () {
        return view('publications');
    })->name('publications');

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');

    Route::get('/search', function () {
        return view('quksearch');
    })->name('search');

    Route::get('/advsearch', function () {
        return view('advsearch');
    })->name('advsearch');

    Route::get('/topography', function () {
        return view('topography');
    })->name('topography');

    Route::get('/soil', function () {
        return view('soil');
    })->name('soil');

    Route::get('/planetBio', function () {
        return view('planetBio');
    })->name('planetBio');

    Route::get('/flora', function () {
        return view('flora');
    })->name('flora');

    Route::get('/details', function () {
        return view('details');
    })->name('details');

});
