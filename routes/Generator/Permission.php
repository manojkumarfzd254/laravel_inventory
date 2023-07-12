<?php
/**
 * Permission Management
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    
    Route::group( ['namespace' => 'Permission'], function () {
        Route::resource('permissions', 'PermissionsController');
        //For Datatable
        Route::post('permissions/get', 'PermissionsTableController')->name('permissions.get');
    });
    
});