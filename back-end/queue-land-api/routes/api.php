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

//----API ROUTE LOGIN REGIESTER AND LOGOUT----//
Route::post('inscription-client', 'clientAuthController@register');
Route::post('connexion-client', 'clientAuthController@login');
Route::post('deconnexion-client', 'clientAuthController@logout');


//----API ROUTE RDV, FEEDBACK, COMMUNE----//
Route::apiResource('rendez-vous', 'rdvController');
Route::apiResource('communes', 'communeController');
Route::post('rendez-vous/{rdv}/feedback', 'feedbackController@store')->middleware('auth:api');