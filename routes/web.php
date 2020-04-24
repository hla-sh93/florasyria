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

    Route::get('/contact', 'ContactFormController@create')->name('contact');
    Route::post('/contact', 'ContactFormController@store')->name('contact.store');

    Route::get('/search', 'searchController@filter')->name('search');
    Route::get('/searchgenera/{id}', 'searchController@genera');
    Route::get('/searchspecies', 'searchController@species');

    Route::get('/advsearch', 'advancedFilterController@index')->name('advsearch');
    Route::get('/advsearchfetch', 'advancedFilterController@fetch');
    Route::post('/advsearch', 'advancedFilterController@search')->name('advsearch');

    Route::get('/map', 'floramapcontroller@index')->name('map');
    Route::get('/sort', 'sortspeciesController@index')->name('sort');
    Route::get('/deletesort/{id}', 'sortspeciesController@delete')->name('sort.delete');
    

});
