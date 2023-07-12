<?php

// route without auth
Route::post('login','Auth\AuthController@login');
Route::post('register','Auth\AuthController@register');
Route::post('sendResetLinkEmail', 'Auth\ForgotPasswordController@sendResetLinkEmail');

