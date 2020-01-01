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

Route::get('etudiant','EtudiantController@index');

Route::get('etudiant/{id}','EtudiantController@show');

Route::post('etudiant','EtudiantController@store');

Route::patch('etudiant/{id}','EtudiantController@update');

Route::delete('etudiant/{id}', 'EtudiantController@destroy');
