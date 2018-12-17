<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Auth::routes();
Auth::routes(['register' => false]);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return redirect(route('login'));
});

#Route::resource('/team', 'TeamController', [
#  'except' => ['edit', 'destroy', 'add']
#]);

#Route::get('/teams', 'TeamController@list');
#Route::get('/team/{teamId}', 'TeamController@getPlayers');
#Route::get('/player/{playerId}', 'PlayerController@fetch');
#Route::post('/player/{teamId}', 'PlayerController@update');
