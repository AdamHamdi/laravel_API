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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// // });
// Route::prefix('v1')->group(function(){
//     Route::get('/test',function(){
//         echo 'welcome from test api version 1';
//     });
// });

// Route::prefix('v2')->group(function(){
//     Route::apiResource('posts','Api\PostController');

// });

Route::get('posts','Api\PostController@index');

Route::middleware('auth:api')->group(function(){
    Route::apiResource('topicality','TopicalityController');
    //Route::get('topicality','TopicalityController@index');

});

