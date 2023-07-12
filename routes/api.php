<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });



/*
* Start Routes From Api Generator
*/
 Route::group(['namespace' => 'Api\V1', 'prefix' => 'v1', 'as' => 'v1.'], function () { 
 require 'Api/api.php'; 
 }); 
/*
*route with auth
*/
 Route::group(['namespace' => 'Api\V1', 'prefix' => 'v1', 'as' => 'v1.', 'middleware' => 'auth:sanctum'], function () { 
 require 'Api/apiAuth.php'; 
 }); 
/*
* End Routes From Api Generator
*/
