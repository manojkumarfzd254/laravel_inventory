<?php
/**
 * Role Management
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    
    Route::group( ['namespace' => 'Role'], function () {
        Route::resource('roles', 'RolesController');
        //For Datatable
        Route::post('roles/get', 'RolesTableController')->name('roles.get');
    });
    
});