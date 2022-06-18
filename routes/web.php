<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// --------   Sample   -----------
// show method
Route::get('/sample', [\App\Http\Controllers\Sample\IndexController::class, 'show']);

// showId method
Route::get('/sample/{id}', [\App\Http\Controllers\Sample\IndexController::class, 'showId']);

// --------   Tweet   ----------
Route::get('/tweet', \App\Http\Controllers\Tweet\IndexController::class)
-> name('tweet.index') ;

Route::get('/tweet/create', \App\Http\Controllers\Tweet\CreateController::class)
-> name('tweet.create');