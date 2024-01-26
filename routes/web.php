<?php

use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\Controller;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/games', 'GamesController@index');

Route::get('/games/create', 'GamesController@create');

Route::get('/games/{game}', 'GamesController@show');

Route::post('/games', 'GamesController@store');

Route::post('/games/{game}/reviews', 'ReviewsController@store');

Route::get('/register',[App\Http\Controllers\RegistrationController::class,'create']);
Route::post('register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');