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
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Route::redirect('/','/ar');

Route::get('/changeLang/{lang}','UtilsController@lang')->name('changelang');

Route::prefix('{language?}')->middleware('locale')->group( function(){

    
    Route::get('/', 'HomePageController@index')->name('/');

    Route::get('/profile/{id}','PagesController@ShowProfile',array('as'=>'profile'))->name('profile');
    Route::get('/about','PagesController@founder')->name('about');

    Route::get('/team', 'PagesController@team')->name('team');

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
