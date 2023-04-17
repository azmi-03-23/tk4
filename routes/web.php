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

Route::resource('users', 'App\Http\Controllers\UserController');

//Route::get('/users','App\Http\Controllers\UserController@store')->withoutMiddleware('auth');

//Route::view('/register','auth.register');

//Route::get('/login/authenticate', 'App\Http\Controllers\LoginController@login')->name('authenticate');

//Route::view('/login','auth.login')->name('login');

//Route::get('/home', 'App\Http\Controllers\HomeController@show')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
