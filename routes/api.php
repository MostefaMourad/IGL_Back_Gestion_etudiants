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

Route::group(['prefix' => 'etudiants'], function() {
    Route::get('/', 'EtudiantController@index')->name('etudiants');
    Route::get('/{id}', 'EtudiantController@show')->name('etudiants.show');
    Route::post('/', 'EtudiantController@store')->name('etudiants.store');
    Route::patch('/{id}', 'EtudiantController@update')->name('etudiants.update');
    Route::delete('/{id}', 'EtudiantController@destroy')->name('etudiants.delete');
});

