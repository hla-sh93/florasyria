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

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/publications', function () {
    return view('publications');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/advsearch', function () {
    return view('advsearch');
});

Route::get('/topography', function () {
    return view('topography');
});

Route::get('/soil', function () {
    return view('soil');
});

Route::get('/planetBio', function () {
    return view('planetBio');
});

Route::get('/flora', function () {
    return view('flora');
});

Route::get('/details', function () {
    return view('details');
});