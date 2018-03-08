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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/send_message', function () {
    return view('phpMoodApp');
})->middleware('auth');

Route::post('/hook', 'BaseController@hook');

Route::get('/outgoing', 'BaseController@outgoing');

Route::get('/hook', 'BaseController@dump');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
