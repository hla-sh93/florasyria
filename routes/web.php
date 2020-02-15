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

    Route::get('/profile/{id}','PagesController@ShowProfile')->name('profile');

    Route::get('/details/{id}', 'PagesController@details')->name('details');

    Route::get('/about','PagesController@founder')->name('about');

    Route::get('/team', 'PagesController@team')->name('team');

    Route::get('/publications', 'PagesController@publication' )->name('publications');

    Route::get('/topography', 'climateController@index')->name('topography');

    Route::get('/soil','PagesController@soil')->name('soil');

    Route::get('/planetBio','PagesController@planetBio' )->name('planetBio');

    Route::get('/flora','PagesController@previousStudies' )->name('flora');    

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');

    Route::get('/search', 'searchController@filter')->name('search');
    Route::get('/searchgenera/{id}', 'searchController@genera');
    Route::get('/searchspecies', 'searchController@species');

    Route::get('/advsearch', function () {
        return view('advsearch');
    })->name('advsearch');

});
