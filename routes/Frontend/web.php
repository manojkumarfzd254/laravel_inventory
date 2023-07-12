
<?php


Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
});
