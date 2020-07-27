<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/members', 'Api\MemberController@store');
Route::middleware('auth:api-member,api-staff')->get('/test', 'Api\MemberController@test');
// Route::get('/test', 'Api\MemberController@test');