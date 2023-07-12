<?php
/**
 * Setting
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {

    Route::group( ['namespace' => 'Setting'], function () {
        Route::resource('settings','SettingsController', ['except' => ['show', 'create', 'save', 'destroy']]);

        Route::post('removeicon/{setting}', 'SettingsLogoController@destroy')->name('removeIcon');

    });

});
