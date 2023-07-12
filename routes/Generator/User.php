<?php
/**
 * User
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    
    Route::group( ['namespace' => 'User'], function () {
        Route::resource('users', 'UsersController');
        //For Datatable
        Route::post('users/get', 'UsersTableController')->name('users.get');
    });
    
});