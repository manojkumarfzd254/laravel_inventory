<?php
/**
 * Page
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    
    Route::group( ['namespace' => 'Page'], function () {
        Route::resource('pages', 'PagesController');
        //For Datatable
        Route::post('pages/get', 'PagesTableController')->name('pages.get');
    });
    
});